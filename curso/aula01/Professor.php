<?php
  /**
   *
   */
  class Professor
  {
    public $nome;
    public $formacao;
    public $salario;

  public function faltar($data){
    return "O professor $this->nome faltou em $data";
  }

  public function tirar_ferias(){
    return "O professor $this->nome está de férias";
  }
}

?>
