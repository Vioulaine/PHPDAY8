<?php

function modify_cookie($name, $value) {
    if (isset($_COOKIE[$name])) {
        if ($name && $value)
            setcookie($name, $value);
    }
}
?>
