<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontrolerNavigasi extends Controller
{
    //
    public function home(){
    	return view('home');
    }
    public function halaman1(){
    	return view('halaman1');
    }
    public function halaman2(){
    	return view('halaman2');
    }
    public function halaman3(){
    	return view('halaman3');
    }
}
