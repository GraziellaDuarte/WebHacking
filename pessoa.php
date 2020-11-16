<?php

Class Pessoa{

    //
    public $peso = "70";
    public $altura = "1.75";

    //
   public function falar(){
       echo "Falando.....";
   }
   public function dormir(){
       echo "zzzzzzzzzzz";
   }

}

$grazi = new Pessoa();
echo $grazi->altura;
