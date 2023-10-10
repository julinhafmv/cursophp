<?php
$a = 5;
$b = 5;
$soma = $a + $b;
$subtracao = $a - $b;
$divisao = $a / $b;
$multiplicacao = $a * $b;

echo $multiplicacao."<br>";
echo $divisao."<br>";
echo $subtracao."<br>";
echo $soma."<br>";

if($soma <10){
 echo "soma menor que 10 <br>";
}else{
 echo "soma maior ou igual a 10 <br>";
}
 
if($subtracao >20){
    echo "subtração maior que 20 <br>";
}elseif($subtracao == 20){
    echo "subtração igual a 20 <br>";
}else{
    echo "subtração menor que 20 <br>";
}

$v = 10;

switch($v){
 case 10:
    echo "oi";
    break;
case 9:
    echo "ola";
    break;

case 8:
    echo "Ola";
    break;
default:
 echo "Olá";
 break;
}

?>