<?php

session_start();
require "../db/connection.php";

$fname = $_POST["f_name"];
$lname = $_POST["l_name"];
$mobile = $_POST["mobile"];

Database::iud("UPDATE `academic_officer` SET `first_name` = '" . $fname . "',
    `last_name` = '" . $lname . "', `mobile` = '" . $mobile . "' WHERE
     `user_name` = '" . $_SESSION["ac_officer"]["user_name"] . "' ");

echo "success";

?>