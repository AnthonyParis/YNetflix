<?php

    function update($id, $title, $link, $category, $description) {
        $pdo = createPDO();

        if($id <= 0) return false;

        if(!empty($title)) {
            $query = $pdo->prepare("UPDATE Medias SET title = :title WHERE id = :id");
            $query->bindValue(":title", htmlspecialchars($title), PDO::PARAM_STR);
            $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $query->execute();
        }

        if(!empty($link)) {
            $query = $pdo->prepare("UPDATE Medias SET link = :link WHERE id = :id");
            $query->bindValue(":link", htmlspecialchars($link), PDO::PARAM_STR);
            $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $query->execute();
        }

        if(!empty($category)) {
            $query = $pdo->prepare("UPDATE Medias SET category = :category WHERE id = :id");
            $query->bindValue(":category", htmlspecialchars($category), PDO::PARAM_STR);
            $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $query->execute();
        }

        if(!empty($description)) {
            $query = $pdo->prepare("UPDATE Medias SET description = :description WHERE id = :id");
            $query->bindValue(":description", htmlspecialchars($description), PDO::PARAM_STR);
            $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $query->execute();
        }

        return true;
    }

?>