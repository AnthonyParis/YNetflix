<?php

    require_once("models/create.php");

    $title = array_key_exists("title", $_GET) ? htmlspecialchars($_GET["title"]) : null;
    $link = array_key_exists("link", $_GET) ? htmlspecialchars($_GET["link"]) : null;
    $category = array_key_exists("category", $_GET) ? htmlspecialchars($_GET["category"]) : null;
    $description = array_key_exists("description", $_GET) ? htmlspecialchars($_GET["description"]) : null;

    if(empty($title) || empty($link) || empty($category) || empty($description)) echo "empty";
    else if(create($title, $link, $category, $description)) echo "success";
    else echo "error";

?>