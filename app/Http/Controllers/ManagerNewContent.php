<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suria_parameters;
use DB;

class ManagerNewContent extends Controller
{
    //
    public function index(){
    	  
    	 $content_list = DB::table('view_suria_contents')->paginate(1);	
    	 $parameter = suria_parameters::all()->where('code_group','g2')->pluck('parameter','id');
    	return view ('manager_new_content')
    	->with('content_lists', $content_list)
      	 ->with(['parameters'=> $parameter]);
    }
}
