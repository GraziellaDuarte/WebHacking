<?php

Class Usuario{

    public $nome = "Graziella Castro";
    public $email = "grazielladuarte@outlook.com";
    public $role = "user"; //User, Admin, Moderador...

    public function mostrarNome(){
        echo $this-> nome;
    }
    public funtion mostrarEmail(){
        echo $this -> email;
    }
    public function isAdmin(){
        if($this-> role == "admin"){
            echo "Você é Administrador do Sistema";
        }else{
            echo "Você não é Administrador!";
        }
    }
}

$grazi = new Usuario();
echo serialize($grazi);



}