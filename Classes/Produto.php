<?php

require "Categorias.php";

class Produto{

  private int $id;
  private String $nome;
  private float $valor;
  private Categorias $categorias;

  public function __construct($nome, $valor){
    $this->id = rand(1, 99999);
    $this->nome = $nome;
    $this->valor = $valor;
  }

  public function getId(){
    return $this->id;
  }

  public function getNome(){
    return $this->nome;
  }

  public function getValor(){
    return $this->valor;
  } 

  public function setCategorias(Categorias $categorias){
    $this->categorias = $categorias;
  }

  public function getCategorias(){
    return $this->categorias;
  }
  
}