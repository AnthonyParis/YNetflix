<?php

    require_once("models/update.php");

    $id = array_key_exists("id", $_GET) ? (int)$_GET["id"] : 0;
    $link = array_key_exists("link", $_GET) ? htmlspecialchars($_GET["link"]) : null;
    $mediaId = array_key_exists("mediaId", $_GET) ? htmlspecialchars($_GET["mediaId"]) : null;
    $schedule = array_key_exists("schedule", $_GET) ? htmlspecialchars($_GET["schedule"]) : null;

    if($id <= 0) return "id";
    if(update($id, $link, $mediaId, $schedule)) echo "success";
    else echo "error";

?>