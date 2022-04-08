<?php

    require_once("models/create.php");

    $link = array_key_exists("link", $_GET) ? htmlspecialchars($_GET["link"]) : null;
    $mediaId = array_key_exists("mediaId", $_GET) ? htmlspecialchars($_GET["mediaId"]) : null;
    $schedule = array_key_exists("schedule", $_GET) ? htmlspecialchars($_GET["schedule"]) : null;

    if(empty($link) || empty($mediaId) || empty($schedule)) echo "empty";
    else if(create($link, $mediaId, $schedule)) echo "success";
    else echo "error";

?>