<!DOCTYPE html>
<html>
<body>

<?php
include 'elevadorF.php';
echo "Piso Actual: ".$PISO_ACTUAL;
echo "<br>";
echo "Recuerde que los pisos: ".$PISOS_MANTENIMIENTO[0]. " y ".$PISOS_MANTENIMIENTO[1]." estan en mantenimiento";
echo "<br>";
    
foreach ($PETICIONES as $x => $x_value) {
    if ($x<$x_value) {
        echo "Piso=" . $x . ", Piso Deseado=" . $x_value." Sube";
        echo "<br>";
    } else {
        echo "Piso=" . $x . ", Piso Deseado=" . $x_value." Baja";
        echo "<br>";
    }
}
echo "<br>";
echo "Orden de Peticiones: ";
echo "<br>";
arsort($PETICIONES);
foreach($PETICIONES as $x => $x_value) {
    if ($x<$x_value) {
        echo "Piso=" . $x . ", Piso Deseado=" . $x_value." Sube";
        echo "<br>";
    } else {
        echo "Piso=" . $x . ", Piso Deseado=" . $x_value." Baja";
        echo "<br>";}
    }
        
echo "<br>";
echo "Recorrido de los Pisos: ";
echo "<br>";

if ($PISO_ACTUAL==$sube_ordenado[0]) {
    foreach ($sube_ordenado as $x => $x_value) {
    echo "Piso =" . $x_value;
    echo "<br>";
    }
    foreach ($baja_ordenado as $x => $x_value) {
    echo "Piso =" . $x_value;
    echo "<br>";  
    }
} elseif ($piso_actual==$baja_ordenado[0]) {
    foreach ($baja_ordenado as $x => $x_value) {
        echo "Piso =" . $x_value;
        echo "<br>";
    }
    foreach ($sube_ordenado as $x => $x_value) {
        echo "Piso =" . $x_value;
        echo "<br>";
    }
} else {
    foreach ($sube_ordenado as $x => $x_value) {
        echo "Piso =" . $x_value;
        echo "<br>";
    }
   foreach ($baja_ordenado as $x => $x_value) {
   echo "Piso =" . $x_value;
   echo "<br>";
   }        
}
?>
</body>
</html>