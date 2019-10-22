<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontrolerBaru extends Controller
{
    //

	public function dashboard(){
		return view('dashboard');
	}
	public function berita(){
		return view('news');
	}
}