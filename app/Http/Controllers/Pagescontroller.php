<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function about(){
    	$title ='About page';
    	return view('pages.about',compact('title'));
    }

    public function index(){
    	$title = 'Laravel aja';
    	return view('pages.index')->with('title', $title);
    }

	public function service(){
		$data = array(
            'title' => 'Service Pagesss',
            'services' => ['E-learning', 'Artificial Intelegent', 'Ionic Applications']
        );
    	return view('pages.services',compact('data'));
    	// return view('pages.services')->with($data);
    }    
}
