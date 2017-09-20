<?php

public class Pessoa{
    
    private $nome;
    private $email;
    private $senha;
    private $cpf;
    
    public function setNome($nome){
        $this -> nome = $nome;
    }
    public function getNome(){
        return $this -> nome;
    }
    public function setEmail($email){
        $this -> email = $email;
    }
    public function getEmail(){
        return $this -> email;
    }
    public function setSenha($senha){
        $this -> senha = $senha;
    }
    public function getSenha(){
        return $this -> senha;
    }
    public function setCPF($cpf){
        $this -> cpf = $cpf;
    }
    public function getCPF(){
        return $this -> cpf;
    }
}

>
