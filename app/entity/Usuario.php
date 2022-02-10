<?php

//Sempre inseir um namespace em suas classes

namespace app\entity; 

class Usuario {

    private $nome, $cpf, $usuarios = [];

    public function cadastrar($nome, $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;

        array_push($this->usuarios, $this);
    }

    public function imprimir(){
        $resultado = 'Lista de usuários cadastrados' . '<br>';

        foreach($this->usuarios as $key => $value){
            $resultado .= "Nome: $value->nome - CPF: $value->cpf" . '<br>';
        }

        return $resultado;
    }
}