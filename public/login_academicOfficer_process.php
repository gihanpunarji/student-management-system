<?php

session_start();
require "../db/connection.php";

if(empty($_POST['u_name'])) {
    echo "Please enter the username";
} else if(empty($_POST['password'])) {
    echo "Please enter the password";
} else {
    $user_name = $_POST['u_name'];
    $password = $_POST['password'];

    $ac_rs = Database::search("SELECT * FROM `academic_officer` WHERE `user_name` = '" . $user_name . "' ");
    $ac_num = $ac_rs->num_rows;

    if($ac_num == 1) {
        $ac_data = $ac_rs->fetch_assoc();
        $_SESSION["ac_officer"] = $ac_data;
        echo "success";
    } else {
        echo "Invalid Credentials";
    }
}

?>