<?php

    function readById() {
        $pdo = createPDO();

        $query = $pdo->prepare("SELECT * FROM Medias WHERE deleted is null AND id = :id");
        $query->bindValue(":id", (int)$_GET["id"], PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetch();

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/YNetflix/Posters/Index.php?action=search&mediaId=" . $results["id"]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $results["poster"] = curl_exec($ch);

        curl_close($ch);

        return $results;
    }

?>