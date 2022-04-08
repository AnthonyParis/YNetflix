<?php

    function update($id, $link, $mediaId, $schedule) {
        $pdo = createPDO();

        if($id <= 0) return false;

        if(!empty($link)) {
            $query = $pdo->prepare("UPDATE Posters SET link = :link WHERE id = :id");
            $query->bindValue(":link", htmlspecialchars($link), PDO::PARAM_STR);
            $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $query->execute();
        }

        if(!empty($mediaId)) {
            $query = $pdo->prepare("UPDATE Posters SET mediaId = :mediaId WHERE id = :id");
            $query->bindValue(":mediaId", htmlspecialchars($mediaId), PDO::PARAM_STR);
            $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $query->execute();
        }

        if(!empty($schedule)) {
            $query = $pdo->prepare("UPDATE Posters SET schedule = :schedule WHERE id = :id");
            $query->bindValue(":schedule", htmlspecialchars($schedule), PDO::PARAM_STR);
            $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $query->execute();
        }

        return true;
    }

?>