<?php
/**
 *
 */
class Conexao{
  private $db_servidor = 'localhost';
  private $db_usuario = 'root';
  private $db_senha = '';
  private $db_banco = 'db_agenda';
  private static $conexao;

  public function abrir_conexao(){
    try{
      self::$conexao = new PDO(
        "mysql:host=$this->db_servidor; dbname=$this->db_banco",
        $this->db_usuario,
        $this->db_senha,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
      );
    }catch(Exception $erro){
      throw new Exception("Erro ao conectar com banco de dados");
    }

    return self::$conexao;
  }

  public static function fechar_conexao(){

  }

  public static function pegar_conexao(){

  }
}

 ?>
