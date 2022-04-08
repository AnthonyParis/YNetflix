<?php

    session_start();

    $_SESSION["userID"] = 0;

?>

<!DOCTYPE HTML>

<html>
    <head>
        <title> YNetflix - Sign </title>
        <meta charset="utf-utf-8"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" defer> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer> </script>
        <script src="Connexion.js" defer> </script>
    </head>
    <body class="container-fluid px-0 text-center" style="background : url('Background.jpeg') center fixed">
        <section>
            <article class="d-flex flex-column justify-content-center text-light" style="height : 100vh;">
                <h1 class="my-5" style="zoom : 250%"> Sign In </h1>
                <form id="connexionForm">
                    <input id="email" class="mx-auto my-5 form-control w-50" type="email" placeholder="Email Address"/>
                    <input class="mx-auto my-5 btn btn-primary w-50" type="submit" value="Sign"/>
                </form>
                <button class="w-50 mx-auto my-5 btn btn-outline-primary" onclick="location.assign('Register.php')"> Or Register </button>
            </article>
        </section>
    </body>
</html>