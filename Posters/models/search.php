<?php

    function search($mediaId, $schedule) {
        $pdo = createPDO();

        $query = $pdo->prepare("SELECT link FROM Posters WHERE deleted is null AND mediaId = :mediaId AND schedule = :schedule");
        $query->bindValue("mediaId", $mediaId, PDO::PARAM_STR);
        $query->bindValue("schedule", $schedule, PDO::PARAM_STR);
        $query->execute();

        $results = $query->fetch();

        return is_array($results) && array_key_exists("link", $results) ? htmlspecialchars($results["link"]) : null;
    }

?>