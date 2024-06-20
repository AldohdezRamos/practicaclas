<?php

$nombre = $_POST["name"];
$edad =$_POST["edad"];
if ($edad>18)
    echo "puede votar";
else    
    echo "No puede votar";
?>