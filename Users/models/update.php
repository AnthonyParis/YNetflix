<?php

    function update($id, $email, $name, $address, $country) {
        $pdo = createPDO();

        if($id <= 0) return false;

        if(!empty($email)) {
            $query = $pdo->prepare("UPDATE Users SET email = :email WHERE id = :id");
            $query->bindValue(":email", htmlspecialchars($email), PDO::PARAM_STR);
            $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $query->execute();
        }

        if(!empty($name)) {
            $query = $pdo->prepare("UPDATE Users SET name = :name WHERE id = :id");
            $query->bindValue(":name", htmlspecialchars($name), PDO::PARAM_STR);
            $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $query->execute();
        }

        if(!empty($address)) {
            $query = $pdo->prepare("UPDATE Users SET address = :address WHERE id = :id");
            $query->bindValue(":address", htmlspecialchars($address), PDO::PARAM_STR);
            $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $query->execute();
        }

        if(!empty($country)) {
            $query = $pdo->prepare("UPDATE Users SET country = :country WHERE id = :id");
            $query->bindValue(":country", htmlspecialchars($country), PDO::PARAM_STR);
            $query->bindValue(":id", (int)$id, PDO::PARAM_INT);
            $query->execute();
        }

        return true;
    }

?>