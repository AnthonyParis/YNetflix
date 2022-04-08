<?php

    require_once("models/delete.php");

    $id = array_key_exists("id", $_GET) ? (int)$_GET["id"] : 0;

    if($id <= 0) return "id";
    if(delete($id)) echo "success";
    else echo "error";

?>