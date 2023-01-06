<?php

session_start();

if ($_SESSION["teacher"]) {
    session_destroy();
    $_SESSION["teacher"] = null;
    echo "success";
}
 
?>