<?php 
	$total = "108.90";
	$euro = new \App\NumbsToWords\Euro;
	$SumZodziais = $euro->getCurrencyText($total);                  
	return $SumZodziais;
?>