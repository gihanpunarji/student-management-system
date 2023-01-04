<?php

session_start();
require "../db/connection.php";

$fname = $_POST["f_name"];
$lname = $_POST["l_name"];
$mobile = $_POST["mobile"];

Database::iud("UPDATE `teacher` SET `first_name` = '" . $fname . "',
    `last_name` = '" . $lname . "', `mobile` = '" . $mobile . "' WHERE
    `user_name` = '" . $_SESSION["teacher"]["user_name"] . "' ");

echo "success";

?>