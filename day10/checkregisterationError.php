<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if ($name == "" || $email == "" || $password == "") {
        $error = "All fields are required.";
    } else {
        header("Location: success.php");
        exit();
    }
}

?>