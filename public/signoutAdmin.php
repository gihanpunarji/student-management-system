<?php

session_start();

if ($_SESSION["admin"]) {
    session_destroy();
    $_SESSION["admin"] = null;
    echo "success";
}
 
?>