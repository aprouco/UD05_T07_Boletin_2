<?php
    header('Content-Type: text/html; charset=UTF-8');
    $pesetas = $_REQUEST["pesetas"];
    $total = $pesetas * 0.0060;
    echo "<br/>$pesetas pesetas equivalen a: ".$total." euros";
?>