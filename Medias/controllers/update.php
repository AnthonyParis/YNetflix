<?php

    require_once("models/update.php");

    $id = array_key_exists("id", $_GET) ? (int)$_GET["id"] : 0;
    $title = array_key_exists("title", $_GET) ? htmlspecialchars($_GET["title"]) : null;
    $link = array_key_exists("link", $_GET) ? htmlspecialchars($_GET["link"]) : null;
    $category = array_key_exists("category", $_GET) ? htmlspecialchars($_GET["category"]) : null;
    $description = array_key_exists("description", $_GET) ? htmlspecialchars($_GET["description"]) : null;

    if($id <= 0) return "id";
    if(update($id, $title, $link, $category, $description)) echo "success";
    else echo "error";

?>