<?php
$name = NULL;
session_start() {
    if (array_key_exists("name", $_GET)) {
        $name = $_GET["name"];
        $_SESSION["name"] = $name;
    }
    else if (array_key_exist("name", $_SESSION)) {
        $name = $_SESSION["name"];
    }
    if($name) {
        echo "Hello " . $_GET["name"];
        }
        else {
            echo "Hello platypus";
        }
setcookies("name", $data);
}
?>
