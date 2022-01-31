<?php
    header('Content-Type: text/html; charset=UTF-8');
    $horas = $_REQUEST["horas"];
    $salario = $horas * 12;
    echo "<br/>O salario semanal é igual a ".$salario."€";
?>