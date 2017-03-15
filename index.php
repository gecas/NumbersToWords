<?php 
	$total = "108.90";
	$euro = new \App\NumbsToWords\Euro;
	$Sum = sprintf('%01.2f', $total);
	list($p1, $p2) = explode('.', $Sum);
	$SumZodziais = $euro->getSumZodziais($p1).' '.$euro->getLitai($p1).', '.$p2.' cnt.';
	return $SumZodziais;
?>