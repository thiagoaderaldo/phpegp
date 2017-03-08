<?php
  class Usuario extends Pessoa{
    private $id_usuario;
    private $senha;

    public function __construct($email, $senha){
      parent::set_email($email);
      $this->senha = $senha;
    }

    public function set_id_usuario($id_usuario){
      $this->id_usuario = $id_usuario;
    }

    public function get_id_usuario(){
      return $this->id_usuario;
    }

    public function set_senha($senha){
      $this->senha = $senha;
    }

    public function get_senha(){
      return $this->senha;
    }
  }
?>
