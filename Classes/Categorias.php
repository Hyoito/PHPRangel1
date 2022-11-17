<?php

class Categorias{
  
  private int $id;
  private String $nome;

  public function setId($id){
    $this->id = $id;
  }

  public function getId(){
    return $this->id;
  }

  public function setNome(){
    $this->nome = $nome;
  }

  public function getNome (){
    return $this->nome;
  }
  
}