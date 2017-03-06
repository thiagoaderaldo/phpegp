<?php
/**
 *
 */
class Calculadora
{

  function raiz_quadrada($numero)
  {
    return pow($numero,1/2);
  }

  public function maximo($n1,$n2){
    if($n1 > $n2){
      return $n1;
    }
    return $n2;
  }

  public function minimo($n1,$n2){
    if ($n1 < $n2) {
      return $n1;
    }
    return $n2;
  }
}

?>
