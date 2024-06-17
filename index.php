<?php
    $URL = explode("/", $_SERVER["QUERY_STRING"]);

    if ($URL[0] == "") {
        require_once("home.php");
    } elseif (isset($URL[1]) && $URL[1] != "") {
        require_once($URL[1].".php");
    } else {
        require_once($URL[0].".php");
    }
?>