<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingtController extends Controller
{
    public function index(){
        return view('pricing');
    }
}
