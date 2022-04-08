<?php

    function readMovie() {
        $pdo = createPDO();

        $query = $pdo->prepare("SELECT * FROM Movies WHERE deleted is null AND mediaId = :id");
        $query->bindValue(":id", (int)$_GET["id"], PDO::PARAM_INT);
        $query->execute();
        $data = $query->fetch();

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/YNetflix/Posters/Index.php?action=search&mediaId=" . $data["mediaId"]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $data["poster"] = curl_exec($ch);

        curl_close($ch);

        return $data;
    }

?>