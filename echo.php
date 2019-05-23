<?php

/* $dataIn = json_encode($_POST); 
$dataOn = json_decode($dataIn,true);

echo "<pre>";
//echo $dataIn;
//print_r(explode(",",$dataIn));
print_r($dataOn);
var_dump($dataOn);
echo "<pre>"; */
//'{ "name":"Krunal", "age":25, "city":"Rajkot", "degree": "BE"}'


$dataIn = json_encode($_POST); 
echo $dataIn;

?>
