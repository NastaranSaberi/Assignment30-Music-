<?php

    session_start();

    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "nstrn" && $password == "9808") {

        $_SESSION["login_status"] = true;
        header("Location: admin_dashboard.php");

    }
    else {

        header("Location: admin_login.php");
    }

?>