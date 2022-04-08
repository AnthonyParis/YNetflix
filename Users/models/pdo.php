<?php

    function createPDO() {
        return new PDO("mysql:host=localhost;dbname=YNetflixUsers", "root", "root");
    }

?>