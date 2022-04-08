<?php

    require_once("models/update.php");

    $id = array_key_exists("id", $_GET) ? (int)$_GET["id"] : 0;
    $email = array_key_exists("email", $_GET) ? htmlspecialchars($_GET["email"]) : null;
    $name = array_key_exists("name", $_GET) ? htmlspecialchars($_GET["name"]) : null;
    $address = array_key_exists("address", $_GET) ? htmlspecialchars($_GET["address"]) : null;
    $country = array_key_exists("country", $_GET) ? htmlspecialchars($_GET["country"]) : null;

    if($id <= 0) return "id";
    if(update($id, $email, $name, $address, $country)) echo "success";
    else echo "error";

?>