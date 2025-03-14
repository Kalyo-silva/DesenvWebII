<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saude;

class controllerResult extends Controller
{
    public function index(){
        $saude = new Saude();
        $data = $saude->imc();
        $data['title'] = 'Resultado';
        return view('result', $data);
    }
}
