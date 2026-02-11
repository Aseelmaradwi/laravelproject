<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
        return view("index");
    }

      function contact(){
        return view("contact",['page_Title'=>'page contact']);
    }

      function about(){
        return view("about",['page_Title'=>'page about']);
    }
    
}
