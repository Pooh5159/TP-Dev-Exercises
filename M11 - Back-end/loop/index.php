<?php

echo "<h2>First Exercise</h2>";

$communes = [
    "10000" => "Troyes",
    "10100" => "Romilly-sur-Seine",
    "10600" => "La Chapelle Saint Luc",
    "10120" => "Saint André les Vergers",
    "10300" => "Sainte Savine"
];
var_dump($communes);

// foreach($array as $key => $value){
//     echo $key . " " . $value;
// };

foreach($communes as $code_postal => $commune){
    echo "$code_postal - $commune";
    echo "<br>";
};



echo "<h2>Second Exercise</h2>";

$x = 23;
while($x <= 87) {
    echo "La valeur est de " . $x;
    if ($x % 10 === 0) {
        echo " C'est une nouvelle dizaine";
    }
    echo "<br>";
    $x++;
}


echo "<h2>Third Exercise</h2>";

$i = 7;
for($i = 7; $i <= 28; $i++) {
    if($i % 2 === 0) {
        echo $i . ", " . $i * ($i * 3 / 2) . "<br>";
    }
}