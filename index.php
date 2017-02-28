<?php 
    require 'sum.php'; 
    require 'euras.php';
    $skaicius = "108.90";
    $Sum = sprintf('%01.2f', $skaicius);
    list($p1, $p2) = explode('.', $Sum);
    $SumZodziais = getSumZodziais($p1).' '.getLitai($p1).' '.$p2.' cnt.';
    echo $SumZodziais;
?>