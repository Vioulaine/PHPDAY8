<?php
$name = NULL;

session_start();
    if(array_key_exists("name", $_GET)) {
        $name = $_GET["name"];
        $_SESSION["name"]=$name;
    }

    elseif(array_key_exists("name", $_SESSION)) {
        $name = $_SESSION["name"];
    }

    if ($name) {
        echo "Hello " . $name;
    }

    else{
        echo "Hello platypus";
    }

?>
