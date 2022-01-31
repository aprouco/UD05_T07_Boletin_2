<?php
    header('Content-Type: text/html; charset=UTF-8');
    $largo = $_REQUEST["largo"];
    $ancho = $_REQUEST["ancho"];
    $area = $largo * $ancho;
    echo "<br/>A área do rectángulo son: ".$area."cm";
?>