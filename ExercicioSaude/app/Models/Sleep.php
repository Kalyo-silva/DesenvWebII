<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Sleep extends Model
{
    private $data_nascimento;
    private $media_sono;

    private $data = [];

    private function setDataNascimento(){
        $this->data_nascimento = new DateTime($_REQUEST['Nasc']);
    }

    private function setMediaSono(){
        $this->media_sono = $_REQUEST['Horas'];
    }

    public function calcMediaSono(){
        $this->setDataNascimento();
        $this->setMediaSono();

        $this->data['data_nascimento'] = $this->data_nascimento->format('d/m/Y H:i:s');
        $this->data['medSono'] = $this->media_sono;

        $now = new DateTime("now");
        $interval = $now->diff($this->data_nascimento);
        $idade = $interval->y;

        $idadeMes = -1;

        if ($idade == 0){
            $idadeMes = $interval->m; 
        }

        $qualidade = "Ruim :(";

        if ($idadeMes <= 3 && $idadeMes >= 0){
            $this->data['SonoIdeal'] = "14 a 17 Horas";

            $limiteInf = 14;
            $limiteSup = 17;
        } else if ($idadeMes <= 11){
            $this->data['SonoIdeal'] = "12 a 15 Horas";

            $limiteInf = 12;
            $limiteSup = 15;
        } else if ($idade <= 2){
            $this->data['SonoIdeal'] = "11 a 14 Horas"; 

            $limiteInf = 11;
            $limiteSup = 14;
        } else if ($idade <=5){
            $this->data['SonoIdeal'] = "10 a 13 Horas";

            $limiteInf = 10;
            $limiteSup = 13;
        } else if ($idade <=13){
            $this->data['SonoIdeal'] = "09 a 11 Horas";  

            $limiteInf = 9;
            $limiteSup = 11;
        } else if ($idade <=17){
            $this->data['SonoIdeal'] = "08 a 10 Horas"; 

            $limiteInf = 8;
            $limiteSup = 10;
        } else if ($idade <=25){
            $this->data['SonoIdeal'] = "07 a 09 Horas";  

            $limiteInf = 7;
            $limiteSup = 9;
        } else if ($idade <=64){
            $this->data['SonoIdeal'] = "07 a 09 Horas";  

            $limiteInf = 7;
            $limiteSup = 9;
        } else if ($idade > 64){
            $this->data['SonoIdeal'] = "07 a 08 Horas";

            $limiteInf = 7;
            $limiteSup = 8;            
        }

        if ($this->media_sono >= $limiteInf && $this->media_sono <= $limiteSup){
            $qualidade = "Boa :)";
        } 

        $this->data['qualidade'] = $qualidade;

        return $this->data;
    }
}
