<?php

    function read() {
        $pdo = createPDO();

        $query = $pdo->query("SELECT * FROM Medias WHERE deleted is null");

        $ch = curl_init();

        $results = array();

        while($data = $query->fetch()) {
            curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/YNetflix/Posters/Index.php?action=search&mediaId=" . $data["id"]);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $data["poster"] = curl_exec($ch);
            array_push($results, $data);

            curl_close($ch);
        }

        return $results;
    }

?>