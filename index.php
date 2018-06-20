<?php


$ime = "Desanka";
$rezultat = str_replace("a","4","ja sam programer");
echo $rezultat;
$drugaRec = str_replace(["a","e"], ["4", "3"], "ja sam programer");
echo $drugaRec;
$malaSlova = "OVO BI TREBALO DA BUDE MALIM SLOVIMA";
$malaSlova = strtolower($malaSlova);
echo $malaSlova;

$samoglasniciBrojevi = str_replace(["a","e","i","o"],["4","3","1","0"], "Ideja nije moja,smislili su je neki kreativni nastavnici" );
echo $samoglasniciBrojevi;

$samoglasniciBrojevi = strtoupper($samoglasniciBrojevi);
echo $samoglasniciBrojevi;



?>