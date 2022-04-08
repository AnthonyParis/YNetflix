<?php

    require_once("models/readById.php");

    $id = array_key_exists("id", $_GET) ? (int)$_GET["id"] : 0;

    print_r(json_encode(readById($id)));

?>