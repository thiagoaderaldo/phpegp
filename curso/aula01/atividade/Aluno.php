<?php
/**
 *
 */
class Aluno{
  public $nome;
  public $sexo;
  public $matricula;

  function matricular()
  {
    $arquivo = fopen('matriculas2017.csv', 'a+');
    $aluno = "$this->nome; $this->sexo; $this->matricula\n";
    fwrite($arquivo,$aluno);
    return true;
  }
}

?>
