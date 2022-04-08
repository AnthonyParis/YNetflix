<?php

    function create($email, $name, $address, $country) {
        $pdo = createPDO();

        $query = $pdo->prepare("INSERT INTO Users (deleted, email, name, address, country, status) VALUES (NULL, :email, :name, :address, :country, 'user')");
        $query->bindValue(":email", htmlspecialchars($email), PDO::PARAM_STR);
        $query->bindValue(":name", htmlspecialchars($name), PDO::PARAM_STR);
        $query->bindValue(":address", htmlspecialchars($address), PDO::PARAM_STR);
        $query->bindValue(":country", htmlspecialchars($country), PDO::PARAM_STR);

        return $query->execute();
    }

?>