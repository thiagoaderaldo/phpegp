<?php
  include_once 'Pessoa.php';

  $p = new Pessoa("Rapadura Doce");
  $p->sexo = "Masculino";
  $p->apelido = "Rapadura";

  echo $p->nome;
 ?>
