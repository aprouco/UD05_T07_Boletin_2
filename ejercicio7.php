<?php
    header('Content-Type: text/html; charset=UTF-8');
    $total = $_REQUEST["total"];
    $baseimp = $total * 21 / 100;
    echo "<br/>A base impoñible é igual a ".$baseimp;
?>