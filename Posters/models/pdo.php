<?php

    function createPDO() {
        return new PDO("mysql:host=localhost;dbname=YNetflixPosters", "root", "root");
    }

?>