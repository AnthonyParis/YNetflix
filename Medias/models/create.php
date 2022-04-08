<?php

    function create($title, $link, $category, $description) {
        $pdo = createPDO();

        $query = $pdo->prepare("INSERT INTO Medias (deleted, title, link, category, description) VALUES (NULL, :title, :link, :category, :description)");
        $query->bindValue(":title", htmlspecialchars($title), PDO::PARAM_STR);
        $query->bindValue(":link", htmlspecialchars($link), PDO::PARAM_STR);
        $query->bindValue(":category", htmlspecialchars($category), PDO::PARAM_STR);
        $query->bindValue(":description", htmlspecialchars($description), PDO::PARAM_STR);

        return $query->execute();
    }

?>