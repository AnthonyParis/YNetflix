<?php

    function read() {
        $pdo = createPDO();

        $query = $pdo->query("SELECT * FROM Posters WHERE deleted is null");

        return $query->fetchAll();
    }

?>