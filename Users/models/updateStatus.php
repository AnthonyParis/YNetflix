<?php

    function updateStatus($id, $status) {
        $pdo = createPDO();

        if($id <= 0) return false;

        if(!empty($status)) {
            $query = $pdo->prepare("UPDATE Users SET status = :status WHERE id = :id");
            $query->bindValue(":status", htmlspecialchars($status), PDO::PARAM_STR);
            $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $query->execute();
        }

        return true;
    }

?>