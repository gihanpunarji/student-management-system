<?php

session_start();

if ($_SESSION["ac_officer"]) {
    session_destroy();
    $_SESSION["ac_officer"] = null;
    echo "success";
}
 
?>