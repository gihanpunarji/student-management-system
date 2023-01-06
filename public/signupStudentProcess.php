<?php


require "../db/connection.php";

if(!empty($_POST["v_code"])) {
    $vCode = $_POST["v_code"];
    $email = $_POST["email"];

    $rs = Database::search("SELECT * FROM `student` WHERE `email` = '". $email ."'");
    $rs_data = $rs->fetch_assoc();

    if ($rs_data["login_code"] == $vCode) {
        echo "success";
    } else {
        echo "Invalid code";
    }
} else {
    echo "Please enter the verifcation code to proceed";
}

?>