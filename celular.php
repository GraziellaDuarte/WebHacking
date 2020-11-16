<?php

Class Celular{
    // Caracteristicas

    public $cor = "preto";
    public $modelo = "Iphone";
    
    //Funcionalidades

    public function ligar(){
        echo "[+] Ligando....";
    }
    public function enviarMensagem(){
        echo "[+]Enviando msg.....";
    }
}

$celular_da_grazi = new Celular();
echo serialize ($celular_da_grazi);

// deserialização
$novo_celular = unserialize("dados entregues pelo serialize");
$novo_celular->ligar();