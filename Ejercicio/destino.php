<?php 
    $datos = $_GET;
if (count($_GET) != 5) {
        echo"Error muchos numeros";
    }
else {
    echo('<pre>');
    var_dump($datos);
    $suma = array_sum($datos);
    $ce= count($datos);
    $promedio = $suma / $ce;
    var_dump($suma);
    var_dump($promedio);
    
    
} 
 ?>
