<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suria_parameters;
use DB;
use App\Contents;

class ManagerNewContent extends Controller
{
    //
    public function index(){
    	  
    	 $content_list = DB::table('view_suria_contents')->get();	
    	 $parameter = suria_parameters::all()->where('code_group','g2')->pluck('parameter','id');
    	return view ('manager_new_content')
    	->with('content_lists', $content_list)
      	 ->with(['parameters'=> $parameter]);
    }
    public function view_data(Request $request){
    	$id = $request->id;
    	$data = Contents::findOrFail($id);
      	return $data;
      }

}
