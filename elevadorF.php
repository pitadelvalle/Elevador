<!DOCTYPE html>
<html>
<body>

<?php
    
$PETICIONES = array("5"=>"7", "1"=>"8", "6"=>"1","3"=>"1");
$PISOS_MANTENIMIENTO=array("2","4");
$PISO_ACTUAL=1;
$subes=array();
$bajas=array();
$sube=array();
$baja1=array();
$sube_ordenado=array();
$baja_ordenado=array();


foreach ($PETICIONES as $x => $x_value) {
    if ($x<$x_value) {
        $sube1=array($x,$x_value);
        $subes = array_merge($subes, $sube1);
    } else {
        $baja=array($x,$x_value);
        $bajas = array_merge($bajas, $baja);
    }
}

asort($subes);
    foreach ($subes as $x => $x_value) {
        $sube=array($x_value);
        $sube_ordenado= array_merge($sube_ordenado, $sube); 
    }
arsort($bajas);
    foreach ($bajas as $x => $x_value) {
        $baja1=array($x_value);
        $baja_ordenado= array_merge($baja_ordenado, $baja1);
    }
?>

</body>
</html>