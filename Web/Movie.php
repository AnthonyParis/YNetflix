
<?php

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/YNetflix/Medias/Index.php?action=readMovie&id=" . $_GET["id"]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $movie = json_decode(curl_exec($ch));

    curl_close($ch);

?>

<!DOCTYPE HTML>

<html>
    <head>
        <title> YNetflix - Movie </title>
        <meta charset="utf-utf-8"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" defer> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer> </script>
    </head>
    <body class="container-fluid px-0 text-center" style="background : url('Background.jpeg') center fixed">
        <?php require_once("Navbar.php"); ?>
        <section>
            <article class="d-flex flex-column justify-content-center align-items-center" style="margin-top : 200px; height : 90vh;">
                <div class="w-75 p-5 bg-light">
                    <h1 class="p-5"> <?= $movie->title; ?> </h1>
                    <p class="p-5" style="text-align : justify"> <?= $movie->description; ?> </p>
                    <video class="w-100 px-5" poster="<?= $movie->poster; ?>" controls>
                        <source src="<?= $movie->video; ?>"/>
                    </video>
                </div>
            </article>
        </section>
    </body>
</html>