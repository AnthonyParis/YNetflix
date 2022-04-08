<?php

    function createPDO() {
        return new PDO("mysql:host=localhost;dbname=YNetflixMedias", "root", "root");
    }

?>