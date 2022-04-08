<?php

    session_start();

    if($_SESSION["userID"] >= 1) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/YNetflix/Users/Index.php?action=getStatus&email=" . $_SESSION["userID"]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $user = json_decode(curl_exec($ch));

        curl_close($ch);

        if($user->status != "admin" && $user->status != "user") header("Location: Connexion.php");
    } else header("Location: Connexion.php");

?>