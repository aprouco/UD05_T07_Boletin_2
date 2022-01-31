<?php
    header('Content-Type: text/html; charset=UTF-8');
    $radio = $_REQUEST["radio"];
    $altura = $_REQUEST["altura"];
    $volumen = (3.14159/3) * pow($radio, 2) * $altura;
    echo "<br/>O volumen do cono é igual a ".$volumen."cm";
?>