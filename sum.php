<?php
function getTrys($skaicius)
{
  $vienetai = array ('', 'vienas', 'du', 'trys', 'keturi', 'penki', 'šeši', 'septyni', 'aštuoni', 'devyni');
  $niolikai = array ('', 'vienuolika', 'dvylika', 'trylika', 'keturiolika', 'penkiolika', 'šešiolika', 'septyniolika', 'aštuoniolika', 'devyniolika');
  $desimtys = array ('', 'dešimt', 'dvidešimt', 'trisdešimt', 'keturiasdešimt', 'penkiasdešimt', 'šešiasdešimt', 'septyniasdešimt', 'aštuoniasdešimt', 'devyniasdešimt');
  
  $skaicius = sprintf("%03d", $skaicius);
  $simtai = ($skaicius{0} == 1)?"šimtas":"šimtai";
  if ($skaicius{0} == 0) $simtai = "";
  
  $du = substr($skaicius, 1);
  if  (($du > 10) && ($du < 20))
    return getSumZodziais($skaicius{0}."00")." ".$niolikai[$du{1}];
  else
    return $vienetai[$skaicius{0}]." ".$simtai." ".$desimtys[$skaicius{1}]." ".$vienetai[$skaicius{2}];
}
  
function getSumZodziais($skaicius)
{
 $zodis = array(
                 array("", "", ""),
                 array("tūkstančių", "tūkstantis", "tūkstančiai"),
                 array("milijonų", "milijonas", "milijonai"),
                 array("milijardų", "milijardas", "milijardai"),
                 array("bilijonų", "bilijonas", "bilijonai"));
  
  $return = "";
  if ($skaicius == 0) return "nulis";
  
  settype($skaicius, "string");
  $size = strlen($skaicius);
  $skaicius = str_pad($skaicius, ceil($size/3)*3, "0", STR_PAD_LEFT);
  
  for ($ii=0; $ii<$size; $ii+=3)
  {
    $tmp = substr($skaicius, 0-$ii-3, 3);
    $return = getTrys($tmp)." ".$zodis[$ii/3][($tmp{2}>1)?2:$tmp{2}]." ".$return;
  }
  return $return;
}
  
function getCentus($skaicius){ $centai = explode('.', $skaicius); return $centai[1]; }