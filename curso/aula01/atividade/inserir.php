<?php
include_once 'Aluno.php';

$novo = new Aluno();
$novo->nome = $_POST['nome'];
$novo->sexo = $_POST['sexo'];
$novo->matricula = $_POST['matricula'];

if($novo->matricular()){
  echo '<script>';
  echo 'alert("Novo aluno matriculado");';
  echo 'location.href="index.php";';
  echo '</script>';
}
 ?>
