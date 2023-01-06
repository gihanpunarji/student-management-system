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

    $teacher_rs = Database::search("SELECT * FROM `teacher` WHERE `user_name` = '" . $user_name . "' ");
    Database::iud("UPDATE `teacher` SET `verified` = '1' WHERE `user_name` = '" . $user_name . "' ");
    $teacher_num = $teacher_rs->num_rows;
    $teacher_data = $teacher_rs->fetch_assoc();

    if($teacher_num == 1) {
        $teacher_data = $teacher_rs->fetch_assoc();
        $_SESSION["teacher"] = $teacher_data;
        echo "success";
    } else {
        echo "Invalid Credentials";
    }
}

?>