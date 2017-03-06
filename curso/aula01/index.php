<?php
  include_once 'Professor.php';

  $p = new Professor();
  $p->nome = "Zezim";
  $p->formacao = "Licenciatura em português";
  $p->salario = 2500;

  echo "Nome: $p->nome <br/>";
  echo "Formação: $p->formacao <br/>";
  echo "Salario: $p->salario <br/>";

  echo $p->faltar("06/03/2017");
?>
