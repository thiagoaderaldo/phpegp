<?php
  class Pessoa{
    // private $nome;
    // private $cpf;
    // private $sexo;
    // private $data_nasc;
    // private $estado_civil;
    // private $rg;
    // private $endereco;
    // private $email;

    // public function __construct($novo_cpf){
    //   $this->cpf = $novo_cpf;
    // }

    private $dados = array();

    public function __set($indice, $valor){
      $this->dados[$indice] = $valor;
    }

    public function __get($indice){
      $this->dados[$indice];
    }

    // é possível criar um método construtor que obrigue a todo objeto a ter
    // um elemento presente.
    public function __construct($nome){
      $this-> dados['nome'] = $nome;
    }
  }
 ?>
