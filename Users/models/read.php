<?php

    function read() {
        $pdo = createPDO();

        $query = $pdo->query("SELECT * FROM Users WHERE deleted is null");

        return $query->fetchAll();
    }

?>