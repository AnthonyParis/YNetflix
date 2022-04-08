<?php

    require_once("models/create.php");

    $email = array_key_exists("email", $_GET) ? htmlspecialchars($_GET["email"]) : null;
    $name = array_key_exists("name", $_GET) ? htmlspecialchars($_GET["name"]) : null;
    $address = array_key_exists("address", $_GET) ? htmlspecialchars($_GET["address"]) : null;
    $country = array_key_exists("country", $_GET) ? htmlspecialchars($_GET["country"]) : null;

    if(empty($email) || empty($name) || empty($address) || empty($country)) echo "empty";
    else if(create($email, $name, $address, $country)) echo "success";
    else echo "error";

?>