<?php
    header('Content-Type: text/html; charset=UTF-8');
    print_r($_REQUEST);
    $num1 = $_REQUEST["num1"];
    $num2 = $_REQUEST["num2"];
    $total = $num1 * $num2;
    echo "<br/>O resultado da multiplicación é: ".$total;
?>