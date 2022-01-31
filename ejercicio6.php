<?php
    header('Content-Type: text/html; charset=UTF-8');
    $base = $_REQUEST["base"];
    $altura = $_REQUEST["altura"];
    $area = ($base * $altura)/2;
    echo "<br/>A área do triángulo son: ".$area."cm";
?>