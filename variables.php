
<?php
// Definir valriables en php


$string = 'es un string';
$entero = 10;
$double = 0.5;
//$date = date();

//axedemos a las variables

echo "<br>";
echo $string;
echo "<br>";
echo $entero;
echo "<br>";
echo $double;
echo "<br>";
echo ('Imprimimos vaiables con var_ dump');
echo "<br>";
var_dump('soy un desimal ' .$double);
//echo $date('');

$alumnos = ['Diego','Anahi'];
$alumno = ['Diego','Anahi','Juan'];
echo "<br>";
print_r($alumnos);
echo "<br>";
// Imprimimos variables con var_dump
var_dump($alumnos);

//acceder a la posicion  de un arreglo
echo "<br>";
print_r($alumnos[1]);


/*$myobj = (
    alumnos :
    nombre : Diego;
    edad : 20;
    dir : 'calle de no se que'
);*/
echo 'recorrer aray';
echo '<br>';
foreach($alumnos as $alumnos){
    echo '<br>';
    echo $alumnos;


} 
echo "<br>";
echo "ciclo for";
echo "<br>";


var_dump ($alumno);
for($i= 0 ; $alumno<3; $i++){
    echo '<br>';
var_dump($alumno);

};

echo "<br>";
echo "While";
echo "<br>";
$i=1;
while ($i <= 10){
echo $i++;

}

echo "<br>";
echo "Condicionales";
echo "<br>";

$status = true;

if ($status !=true ) {
    echo "status es verdadero";
}else {
    echo "el estatus no es diferente de verdadero";
}












