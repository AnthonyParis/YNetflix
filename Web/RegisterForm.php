<?php

    session_start();

    $ch = curl_init();

    $email = htmlspecialchars($_POST["email"] ?? "");
    $name = htmlspecialchars($_POST["name"] ?? "");

    curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/YNetflix/Users/Index.php?action=create&email=" . $email . "&name=" . $name . "&address=Paris&country=Paris");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $user = curl_exec($ch);

    curl_close($ch);

    $email = $_POST["email"];

    $_SESSION["userID"] = $email;

?>