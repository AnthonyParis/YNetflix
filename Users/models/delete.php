<?php

    function delete($id) {
        $pdo = createPDO();

        $query = $pdo->prepare("UPDATE Users SET deleted = NOW() WHERE id = :id");
        $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
        $query->execute();

        return $query->execute();
    }

?>