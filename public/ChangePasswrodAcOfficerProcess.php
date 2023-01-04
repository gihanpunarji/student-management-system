<?php

session_start();
require "../db/connection.php";

if(empty($_POST["password"])) {
    echo "Please enter the password";
} else if(empty($_POST["v_code"])) {
    echo "Please enter the verification code";
} else {
    $login_code = $_POST["v_code"];
    $password = $_POST["password"];
    $rs = Database::search("SELECT * FROM `academic_officer` WHERE `email` = '" . $_SESSION["ac_officer"]["email"] . "' ");
    if($rs == 1) {
        $rs_data = $rs->fetch_assoc();
        if($rs_data["login_code"] == $login_code) {
            Database::iud("UPDATE `academic_officer` SET `password` = '" . $password . "' 
            WHERE `email` = '" . $_SESSION["ac_officer"]["email"] . "' ");
            echo "success";
        } else {
            echo "Invalid verification code";
        }
    }


}

?>