<?php

    function create($link, $mediaId, $schedule) {
        $pdo = createPDO();

        $query = $pdo->prepare("INSERT INTO Posters (deleted, link, mediaId, schedule) VALUES (NULL, :link, :mediaId, :schedule)");
        $query->bindValue(":link", htmlspecialchars($link), PDO::PARAM_STR);
        $query->bindValue(":mediaId", (int)$mediaId, PDO::PARAM_INT);
        $query->bindValue(":schedule", htmlspecialchars($schedule), PDO::PARAM_STR);

        return $query->execute();
    }

?>