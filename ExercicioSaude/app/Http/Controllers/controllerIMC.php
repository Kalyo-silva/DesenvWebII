<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerIMC extends Controller
{
    public function index(){
        $data['title'] = 'IMC'; 
        return view('IMC', $data);
    }
}
