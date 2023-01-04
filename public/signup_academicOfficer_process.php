<?php

session_start();
require "../db/connection.php";

if(empty($_POST["u_name"])) {
    echo "Please enter the username";
} else if(empty($_POST["password"])) {
    echo "Please enter the password";
} else if(empty($_POST["l_code"])) {
    echo "Please enter the login code";
} else {
    $user_name = $_POST['u_name'];
    $password = $_POST['password'];
    $l_code = $_POST['l_code'];

    $ac_rs = Database::search("SELECT * FROM `academic_officer` WHERE `user_name` = '" . $user_name . "' 
    AND `login_code` = '" . $l_code."' AND `password` = '" . $password."' ");
    $ac_num = $ac_rs->num_rows;

    if($ac_num == 1) {
        $ac_data = $ac_rs->fetch_assoc();
        echo "success";
        $_SESSION["ac_officer"] = $ac_data;
        Database::iud("UPDATE `academic_officer` SET `login_code` = ' ' WHERE `user_name` = '" . $user_name . "' ");
    } else {
        echo "Invalid Credentials";
    }
}

?>