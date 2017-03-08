<?php
  abstract class Pessoa{
    private $nome;
    private $email;
    private $criado_em;

    public function set_nome($nome){
      $this->nome = $nome;
    }
    public function get_nome(){
      return $this->nome;
    }
    
    public function set_email($email){
      $this->email = $email;
    }
    public function get_email(){
      return $this->email;
    }

    public function set_criado_em($criado_em){
      $this->criado_em = $criado_em;
    }
    public function get_criado_em(){
      return $this->criado_em;
    }
  }
?>
