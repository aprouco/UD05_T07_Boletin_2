<?php
    header('Content-Type: text/html; charset=UTF-8');
    $kb = $_REQUEST["kb"];
    $mb = $kb / 1024;
    echo "<br/>".$kb." kilobits son ".$mb." megabits";
?>