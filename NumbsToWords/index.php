<?php 
	$total = "108.90";
	$euro = new \App\NumbsToWords\Euro;
	$sum = new \App\NumbsToWords\Sum;
	$Sum2 = sprintf('%01.2f', $total);
	list($p1, $p2) = explode('.', $Sum2);
	$SumZodziais = $sum->getSumZodziais($p1).' '.$euro->getLitai($p1).', '.$p2.' cnt.';
	return $SumZodziais;
?>