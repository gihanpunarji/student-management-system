<?php

session_start();
require "../db/connection.php";

$fname = $_POST["f_name"];
$lname = $_POST["l_name"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];

Database::iud("UPDATE `student` SET `first_name` = '" . $fname . "',
    `last_name` = '" . $lname . "', `mobile` = '" . $mobile . "', `address` = '" . $address . "' 
     WHERE `user_name` = '" . $_SESSION["student"]["user_name"] . "' ");

echo "success";

?>