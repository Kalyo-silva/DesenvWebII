<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saude;
use App\Models\sleep;
use App\Models\Travel;

class controllerResult extends Controller
{
    public function resultIMC(){
        $saude = new Saude();
        $data = $saude->imc();
        $data['title'] = 'IMC Calculado!';
        return view('resultIMC', $data);
    }

    public function resultSleep(){
        $sleep = new Sleep();
        $data = $sleep->calcMediaSono();
        $data['title'] = 'Sono Ideal Calculado!';
        return view('resultSleep', $data);
    }

    public function resultTravel(){
        $travel = new Travel();
        $data = $travel->custoViagem();
        $data['title'] = "Custo da Viagem";
        return view('resultTravel', $data);
    }
}
