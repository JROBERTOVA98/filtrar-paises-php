<?php
$region = $_POST['region'];
$nombre = $_POST['name'];
$capital = $_POST['capital'];
$bandera = $_POST['flag'];

$response = file_get_contents('https://restcountries.eu/rest/v2/region/'.$region.'?fields='.$nombre.';'.$capital.';'.$bandera);


echo $response;
?>