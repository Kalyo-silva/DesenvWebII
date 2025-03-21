<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerTravel extends Controller
{
    public function index(){
        $data['title'] = 'Viagem'; 
        return view('travel', $data);
    }
}
