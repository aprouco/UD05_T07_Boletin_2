<?php
    header('Content-Type: text/html; charset=UTF-8');
    $mb = $_REQUEST["mb"];
    $kb = $mb * 1024;
    echo "<br/>".$mb." megabits son ".$kb." kilobits";
?>