<?php
  /**
   *
   */
  class UsuarioDAO extends Conexao{
    private $conexao;

    public function inserir(Usuario $usuario){
      $this->conexao = parent::abrir_conexao();

      print_r($usuario);
    }
  }

?>
