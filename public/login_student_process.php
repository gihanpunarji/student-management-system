<?php

require "../db/connection.php";

if(empty($_POST['u_name'])) {
    echo "Please enter the username or email";
} else if(empty($_POST['password'])) {
    echo "Please enter the password";
} else {
    $user_name = $_POST['u_name'];
    $password = $_POST['password'];

    $student_rs = Database::search("SELECT * FROM `student` WHERE `user_name` = '" . $user_name . "' 
    OR `email` = '" . $user_name . "' ");
    Database::iud("UPDATE `student` SET `verified` = '1' WHERE `user_name` = '" . $user_name . "' ");
    $student_num = $student_rs->num_rows;

    if($student_num == 1) {
        $student_data = $student_rs->fetch_assoc();
        echo "success";
    } else {
        echo "Invalid Credentials";
    }
}

?>