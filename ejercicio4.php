<?php
    header('Content-Type: text/html; charset=UTF-8');
    $num1 = $_REQUEST["num1"];
    $num2 = $_REQUEST["num2"];
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;
    echo "<br/>O valor da suma é: ".$suma;
    echo "<br/>O valor da resta é: ".$resta;
    echo "<br/>O valor da multiplicacion é: ".$multiplicacion;
    echo "<br/>O valor da division é: ".$division;
?>