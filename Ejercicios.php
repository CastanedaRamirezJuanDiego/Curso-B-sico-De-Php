<?php

// Ejercicios con ciclo for 
echo "<br> ejercicios con ciclo for ";
for ($i=0; $i <=10; $i++) { 
    echo "<br>";
echo $i;
};

for ($x=0; $x <=20; $x=$x+2) { 
    echo "<br>";
echo $x;
};
 
$num = 5;
for ($i=0; $i < 10 ; $i++) { 
   
$total = $num + $i;
echo '<br>';
echo "$num + $i = $total ";
}

// ejercicios con siclo for else 
echo "<br> ejercicios con ciclo for else ";

$azucar = 'dulce';
echo '<br>';

if ($azucar ='dulce' ) {
    echo "el azucar es dulce";
}else {
    echo "el azucar no es dulce";
}

$Color = 'Azul';
echo '<br>';

if ($Color !='Azul' ) {
    echo "el NO color es azul";
}else {
    echo "el color es azul";
}

echo '<br>';

if ($num < 10 ) {
    echo "El numero es menor a 10";
}else {
    echo "El numero es mayor a 10";
}


//Ejercicios con foreach
echo ' <h4> <br> Ejercicios con foreach </h4>';


$personas = ['Diego','Anna'];

foreach ($personas as $persona) {
    echo '<br>';
    echo $persona;
}

$frutas = ['Mango','Manzana','Pera','Platano'];

foreach ($frutas as $fruta) {
    echo '<br>';
    echo 'Las frutas son '.$fruta;
}

$Dias = ['Lunes','Martes','Miercoles','Jueves','Viernes'];

foreach ($Dias as $Dia) {
    echo '<br>';
    echo 'Dia '.$Dia;
}

echo '<h4> <br> ciclo While </h4>';

$a=1;

while ($a <= 10) {
    echo $a++;
}

echo "<br>";

$i=1;
while($i<=5)
{
    $j=1;
    while($j<=$i)
    {
      echo"w";
      $j++;     
    }
    echo"<br>";
    $i++;
}









