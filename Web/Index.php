<?php

    require_once("UserStatus.php");

?>

<!DOCTYPE HTML>

<html>
    <head>
        <title> YNetflix - Home </title>
        <meta charset="utf-utf-8"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" defer> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer> </script>
        <script src="Index.js" defer> </script>
    </head>
    <body class="container-fluid px-0 text-center" style="background : url('Background.jpeg') center fixed">
        <?php require_once("Navbar.php"); ?>
        <section>
            <article class="d-flex flex-column justify-content-center text-light" style="height : 90vh;">
                <h1 style="zoom : 250%"> YNetflix </h1>
                <h3> See What's Next </h3>
            </article>
            <article class="container">
                <table class="table border rounded bg-light">
                    <thead>
                        <tr>
                            <th style="width : 10%"> # </th>
                            <th style="width : 10%"> Title </th>
                            <th style="width : 10%"> Category </th>
                            <th style="width : 25%"> Description </th>
                            <th style="width : 25%"> See </th>
                        </tr>
                    </thead>
                    <tbody id="medias">
                    </tbody>
                </table>
            </article>
        </section>
    </body>
</html>