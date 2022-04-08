<?php

    require_once("models/updateStatus.php");

    $id = array_key_exists("id", $_GET) ? (int)$_GET["id"] : 0;
    $status = array_key_exists("status", $_GET) ? htmlspecialchars($_GET["status"]) : null;

    if($id <= 0) return "id";
    if(updateStatus($id, $status)) echo "success";
    else echo "error";

?>