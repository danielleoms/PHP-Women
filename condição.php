<?php

  // CONDIÇÃO COM && OU || // 

$saldo = 100;
$temChequeEspecial = true;
$valorParaSacar = 180;

var_dump($saldo); //valor e tipo
var_dump($valorParaSacar); //valor e tipo

$saldosuficiente = $valorParaSacar <= $saldo;

// AND (&&)
if ( $saldosuficiente && $temChequeEspecial) {
  echo ("pode" . "\n");
  $novoSaldo = $saldo - $valorParaSacar;
  var_dump($novoSaldo);
  
}else{
  echo("não pode" . "\n");
  $novoSaldo = $saldo - $valorParaSacar;
  var_dump($novoSaldo);
  }

// OR (||)
if ( $saldosuficiente || $temChequeEspecial) {
  echo ("pode" . "\n"); 
  $novoSaldo = $saldo - $valorParaSacar;
  var_dump($novoSaldo);
  
}else{
  echo("não pode" . "\n");
  $novoSaldo = $saldo - $valorParaSacar;
  var_dump($novoSaldo);
  }


