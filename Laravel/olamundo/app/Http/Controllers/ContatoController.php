<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        $data['email'] = 'kalyosilva@gmail.com';
        return view('contato', $data);
    }
}
