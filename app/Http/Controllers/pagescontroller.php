<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    //

    public function home(){
    	$tasks = array('1st task','2nd task','3rd task');
		return view('welcome')->withtasks($tasks)->withfoo('foo');
    }
    public function contact(){
    	return view('contact');
    }
    public function about(){
    	return view('about');
    }
}
