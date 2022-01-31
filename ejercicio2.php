<?php
    header('Content-Type: text/html; charset=UTF-8');
    $euros = $_REQUEST["euros"];
    $total = $euros * 166.3860;
    echo "<br/>$euros euros equivalen a: ".$total." pesetas";
?>