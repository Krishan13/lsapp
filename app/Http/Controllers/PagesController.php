<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (){
        return view('index');
    }

    public function about (){
        return view('about');
    }

    public function services (){
        $data=array(
            'title'=>'We Provide :',
            'services'=>['WebDesign', 'SEO', 'PHP']
        );
        return view('services')->with($data);
    }
}
