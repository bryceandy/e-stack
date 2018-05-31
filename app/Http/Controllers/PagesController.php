<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function training(){
        return view('training');
    }

    public function consultancy(){
        return view('consultancy');
    }

    public function managed(){
        return view('managed');
    }
}
