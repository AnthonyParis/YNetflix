<?php

    require_once("models/search.php");

    $mediaId = array_key_exists("mediaId", $_GET) ? htmlspecialchars($_GET["mediaId"]) : null;
    $schedule = date("H") >= 6 && date("H") < 18 ? "day" : "night";

    if(empty($mediaId) || empty($schedule)) echo "empty";
    else if($results = search($mediaId, $schedule)) echo $results;
    else echo "error";

?>