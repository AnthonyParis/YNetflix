<?php

    function delete($id) {
        $pdo = createPDO();

        $query = $pdo->prepare("UPDATE Posters SET deleted = NOW() WHERE id = :id");
        $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
        $query->execute();

        return $query->execute();
    }

?>