<?php
/**
 *
 */
class Aluno
{
  public $nome;
  public $sexo;
  public $matricula;
}
  $a = new Aluno();

  $a->nome = "Chiquim";
  $a->sexo = "Masculino";
  $a->matricula = "123456";

  echo "Aluno A.";
  echo "<br/>";
  echo "Nome: ", $a->nome;
  echo "<br/>";

  $b = new Aluno();

  $b->nome = "João";
  $b->sexo = "Masculino";
  $b->matricula = "135457";

  echo "<br/>";
  echo "Aluno B.";
  echo "<br/>";
  echo "Nome: ", $b->nome, '<br/>';
  echo "Sexo: ", $b->sexo, '<br/>';
  echo "Matrícula: ", $b->matricula, '<br/>';

?>
