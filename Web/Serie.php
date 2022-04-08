
<?php

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/YNetflix/Medias/Index.php?action=readById&id=" . $_GET["id"]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $serie = json_decode(curl_exec($ch));

    curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/YNetflix/Medias/Index.php?action=readSerie&id=" . $_GET["id"]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $episodes = json_decode(curl_exec($ch));

    curl_close($ch);

?>

<!DOCTYPE HTML>

<html>
    <head>
        <title> YNetflix - Serie </title>
        <meta charset="utf-utf-8"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" defer> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer> </script>
    </head>
    <body class="container-fluid px-0 text-center" style="background : url('Background.jpeg') center fixed">
        <?php require_once("Navbar.php"); ?>
        <section>
            <article class="d-flex flex-column justify-content-center align-items-center" style="margin-top : 5vh">
                <div class="w-75 p-5 bg-light">
                    <h1 class="p-5"> <?= $serie->title; ?> </h1>
                    <p class="p-5" style="text-align : justify"> <?= $serie->description; ?> </p>
                    <img class="w-100 px-5" src="<?= $serie->poster; ?>"/>
                    <div class="m-5">
                        <table class="table border rounded bg-light">
                            <thead>
                                <tr>
                                    <th style="width : 10%"> # </th>
                                    <th style="width : 10%"> Title </th>
                                    <th style="width : 25%"> See </th>
                                </tr>
                            </thead>
                            <tbody id="medias">
                                <?php foreach($episodes as $episode) { ?>
                                    <tr>
                                        <th> <?= $episode->episodeId; ?> </th>
                                        <th> <?= $episode->title; ?> </th>
                                        <th>
                                            <button class="w-50 btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#episode-<?= $episode->episodeId; ?>"> See Episode </button>
                                        </th>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
        </section>
        <?php foreach($episodes as $episode) { ?>
            <div id="episode-<?= $episode->episodeId; ?>" class="modal fade">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content p-5">
                        <h1 class="p-4"> <?= $episode->title; ?> </h1>
                        <p class="p-4" style="text-align : justify"> <?= $episode->description; ?> </p>
                        <video class="w-100 px-5" poster="<?= $serie->poster; ?>" controls>
                            <source src="<?= $episode->video; ?>"/>
                        </video>
                    </div>
                </div>
            </div>
        <?php } ?>
    </body>
</html>