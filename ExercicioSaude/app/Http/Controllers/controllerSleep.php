<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerSleep extends Controller
{
    public function index(){
        $data['title'] = 'Sono'; 
        return view('sleep', $data);
    }
}
