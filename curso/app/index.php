<!-- <link rel='stylesheet' href='assets/bootstrap/css/bootstrap.css'>

<button class="btn btn-primary">
Botão Azul
</button>
<button class="btn btn-danger">
Botão Vermelho
</button> -->

<?php
  include_once 'modelo/Conexao.php';

  $a = new Conexao();

  try{
    $a->abrir_conexao();
  }catch(Exception $erro){
    echo $erro;
  }
?>
