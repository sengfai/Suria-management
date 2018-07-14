<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suria_getcontenturl;
use Illuminate\Support\Facades\Validator;
use DB;
use App\suria_parameters;

Class UrlFecthContentController  extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function url_fetch_content()
    {
        
        $url_content = DB::table('view_fetch_url_content')->orderBy('created_at', 'desc')->get();
        $url_count = count($url_content);
        $parameter = suria_parameters::all()->where('code_group','g2')->pluck('parameter','id');
        return view ('url_fetch_content')
            ->with('url_contents', $url_content)
            ->with('url_counts',$url_count)
            ->with(['parameters'=> $parameter]);
            
      

    }
    
    protected function get_url(Request $request_content_url)
    {
       
       
       
            $get_url = $request_content_url->input('txt_url');
            $get_url_category = $request_content_url->input('url_category_');
            //echo $get_url_category;
            if(isset( $get_url_category)) {
            if( $get_url_category == 'NULL') {
              
                 return back()->with('missing', true);
            }
            else {
                $parameter = suria_parameters::select('id','parameter','code_group')->where('code_group','g2')->get();
            foreach ($parameter as $result) {
               if($result->id == $get_url_category){
                 $code_group = $result->code_group ;
               }
            }
          
           
            $existing = DB::table('suria_getcontenturls')->where([
                    ['url', '=', $get_url], 
                    ['id_category', '=', $get_url_category ],
                    ['group_category', '=', $code_group ]
                   
            ])->first();
            if($existing){
            return back()->with('unsuccess', true); 
            }else{
                $urls= new suria_getcontenturl;
                $urls->url = $get_url;
                $urls->id_category = $get_url_category;
                $urls->group_category = $code_group;
                 $urls->save();
                return back()->with('success', true);
                }
            }
        }   
    }
} 


?>