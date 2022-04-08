<?php

    function readById($id) {
        $pdo = createPDO();

        $query = $pdo->prepare("SELECT * FROM Users WHERE id = :id AND deleted is null");
        $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
        $query->execute();

        return $query->fetch();
    }

?>