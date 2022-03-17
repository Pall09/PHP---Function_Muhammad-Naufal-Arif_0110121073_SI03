<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            .welcome {
                margin: 50px;
                text-align: center;
            }
            footer {
                width: 100%;
                position: fixed;
                bottom: 0;
            }
            .develop {
                font-size: 10px;
            }
        </style>
    </head>
    <body>
        <?php
            include_once('atas.php');
        ?>
        <h1 class='welcome'>Welcome Home !!!</h1>
        <?php
            include_once('bawah.php');
        ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    </body>
</html>