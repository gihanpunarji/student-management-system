<?php

session_start();

require "db/connection.php";

if(isset($_POST["v_code"])) {
    $vCode = $_POST["v_code"];
    $email = $_POST["email"];

    $rs = Database::search("SELECT * FROM `admin` WHERE `email` = '". $email ."'");
    $rs_data = $rs->fetch_assoc();

    if ($rs_data["verification_code"] == $vCode) {
        echo "success";
        $_SESSION["admin"] = $rs_data;
    } else {
        echo "Invalid code";
    }
} else {
    echo "Please enter the verifcation code to proceed";
}

?>