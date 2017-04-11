<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function notfound(){
    	return view('errors.404');
    }
    public function internalError(){
        	echo "= =";
    	return view('errors.500');
    }
}
