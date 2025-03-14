<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saude extends Model
{
    private $nome;
    private $data_nascimento;
    private $peso;
    private $altura;

    private $data = [];

    public function setNome(){
        $this->nome = $_REQUEST['Nome'];
    }
    public function setDataNascimento(){
        $this->data_nascimento = $_REQUEST['Nasc'];
    }

    public function setPeso(){
        $this->peso = $_REQUEST['Peso'];
    }

    public function setAltura(){
        $this->altura = $_REQUEST['Alt'];
    }

    private function setFromRequest(){
        $this->setNome();
        $this->setDataNascimento();
        $this->setPeso();
        $this->setAltura();

        $this->data['nome'] = $this->nome;
        $this->data['data_nascimento'] = $this->data_nascimento;
        $this->data['peso'] = $this->peso;
        $this->data['altura'] = $this->altura;
    }

    public function imc(){  
        $this->setFromRequest();

        $imc = $this->peso / ($this->altura**2);

        $this->data['imc'] = $imc;

        return $this->data;
    }
}
