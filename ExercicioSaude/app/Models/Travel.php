<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    private $Combustivel;
    private $Valor;
    private $Distancia;
    private $Consumo;

    private $data = [];

    public function setCombustivel(){
        $this->Combustivel = $_REQUEST['Combustivel'];
    }
    public function setValor(){
        $this->Valor = $_REQUEST['Valor'];
    }
    public function setDistancia(){
        $this->Distancia = $_REQUEST['Distancia'];
    }
    public function setConsumo(){
        $this->Consumo = $_REQUEST['Consumo'];
    }

    public function custoViagem(){
        $this->setCombustivel();
        $this->setValor();
        $this->setDistancia();
        $this->setConsumo();

        $gastos = round(($this->Distancia / $this->Consumo) * $this->Valor, 2);

        $this->data['Gastos'] = $gastos;
        $this->data['Combustivel'] = $this->Combustivel;

        return $this->data;
    }
}
