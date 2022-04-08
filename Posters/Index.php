<?php

    require_once("models/pdo.php");

    $action = array_key_exists("action", $_GET) ? htmlspecialchars($_GET["action"]) : null;

    if($action == "create") require_once("controllers/create.php");
    else if($action == "read") require_once("controllers/read.php");
    else if($action == "search") require_once("controllers/search.php");
    else if($action == "update") require_once("controllers/update.php");
    else if($action == "delete") require_once("controllers/delete.php");

?>