<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function penjualan(){
        return view('blog.penjualan')
        ->with('penjualan','Toko Albani Rajata Malik');
    }
    
}