<?php


class Carro{

private $modelo;
private $marca;
private $ano;
private $alarme;
private $cor;
    
    
   public function setModelo($modeloparam){
      $this->modelo = $modeloparam;
   }
    
   public function getModelo(){
      echo $this->modelo;
   }

    
    
    
    
   public function setMarca($marcaparam){
      $this->marca = $marcaparam;
   }

   public function getMarca(){
      echo $this->marca;
   }
    
    
    

   public function setAno($anoparam){
      $this->ano = $anoparam;
   }
   
    public function getAno(){
        echo $this->ano;
    }
    
    
    
    
    public function setAlarme($alarmeparam){
      $this->alarme = $alarmeparam;
   }
   
    public function getAlarme(){
        echo $this->alarme;
    }
    
    
    
    
    public function setCor($corparam){
      $this->cor = $corparam;
   }
   
    public function getCor(){
        echo $this->cor;
    }
    
}
?>