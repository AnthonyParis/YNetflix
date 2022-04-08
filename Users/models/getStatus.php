<?php

    function getStatus() {
        $pdo = createPDO();

        $query = $pdo->prepare("SELECT status FROM Users WHERE deleted is null AND email = :email");
        $query->bindValue(":email", htmlspecialchars($_GET["email"] ?? ""), PDO::PARAM_STR);
        $query->execute();

        return $query->fetch();
    }

?>