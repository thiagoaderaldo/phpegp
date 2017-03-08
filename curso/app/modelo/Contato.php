<?php
  /**
   *
   */
  class Contato extends Pessoa{

    private $id_contato;
    private $usuario_id;
    private $telefone;

    public function __construct($nome,$telefone){
      parent::set_nome($nome);
      $this->telefone = $telefone;
    }

    public function set_id_contato($id_contato){
      $this->id_contato = $id_contato;
    }

    public function get_id_contato(){
      return $this->id_contato;
    }
    
    public function set_usuario_id($usuario_id){
      $this->usuario_id = $usuario_id;
    }

    public function get_usuario_id(){
      return $this->usuario_id;
    }

    public function set_telefone($telefone){
      $this->telefone = $telefone;
    }

    public function get_telefone(){
      return $this->telefone;
    }
  }

?>
