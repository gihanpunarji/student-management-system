<?php

session_start();

if ($_SESSION["student"]) {
    session_destroy();
    $_SESSION["student"] = null;
    echo "success";
}
 
?>