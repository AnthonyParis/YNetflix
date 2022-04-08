<!DOCTYPE HTML>

<html>
    <head>
        <title> YNetflix - Account </title>
        <meta charset="utf-utf-8"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"> </script>
        <script src="Account.js"> </script>
    </head>
    <body class="container-fluid px-0 text-center" style="background : url('Background.jpeg') center fixed">
        <?php require_once("Navbar.php"); ?>
        <section>
            <article class="d-flex flex-column justify-content-center align-items-center rounded" style="height : 90vh;">
                <form id="update" class="d-flex flex-column justify-content-center align-items-center w-50 h-75 bg-light">
                    <h1 class="my-4"> Account </h1>
                    <input id="email" class="w-50 my-4 form-control" placeholder="Email Address"/>
                    <input id="name" class="w-50 my-4 form-control" placeholder="Name"/>
                    <input id="address" class="w-50 my-4 form-control" placeholder="Address"/>
                    <input id="country" class="w-50 my-4 form-control" placeholder="Country"/>
                    <input class="w-50 my-4 btn btn-outline-primary" type="submit"/>
                </form>
            </article>
        </section>
    </body>
</html>