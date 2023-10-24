<?php

 
$materias = array(
array("BD", 8),
array("Analise", 9),
array("CC", 8),
array("Frontend", 7),
array("Pmobile", 6),
array("Portugues", 10),
array("Matematica" ,6),
array("Historia", 10),
array("Biologia", 8),
array("Geografia",7),
array("Quimica",6),
array("Sociologia",8),
array("ProjVida", 8),
array("EdFinanceira", 7),
array("Ingles", 10),
);

foreach($materias as $materia){
    echo $materia[0]." - ".$materia[1]."<br/>";
}


?>