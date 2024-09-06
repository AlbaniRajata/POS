<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodandbeverage (){
        return view('blog.foodbeverage')
        ->with('category','Food And Beverage');
    }
    public function beautyhealth (){
        return view('blog.beautyhealth')
        ->with('category','Beauty And Health');
    }
    public function homecare(){
        return view('blog.homecare')
        ->with('category','Home And Care');
    }
    public function babykid(){
        return view('blog.babykid')
        ->with('category','Baby And Kid');
    }
    
}