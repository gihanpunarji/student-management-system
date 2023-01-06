<?php

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

    $teacher_rs = Database::search("SELECT * FROM `teacher` WHERE `user_name` = '" . $user_name . "' 
    AND `login_code` = '" . $l_code."' AND `password` = '" . $password."' ");
    $teacher_num = $teacher_rs->num_rows;

    if($teacher_num == 1) {
        echo "success";
        Database::iud("UPDATE `teacher` SET `login_code` = ' ' WHERE `user_name` = '" . $user_name . "' ");
    } else {
        echo "Invalid Credentials";
    }
}

?>