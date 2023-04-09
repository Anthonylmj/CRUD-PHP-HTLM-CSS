<!--Protect page from not logged users-->

<?php
session_start();

if (!isset($_SESSION['userlogged'])) {

    echo '<script>
                    alert("Acción no permitida, debes iniciar sesión");
                    window.location = "http://localhost/formdatabase";
          </script>      
        ';
    session_destroy();
    die();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/style_read.css">
</head>

<body>
    <div id="particles-js"></div>
            <div class="table_div">

                <h1>LOGUEADO</h1>
                <a href="http://localhost/formdatabase/view/users.php">Ver USERS</a>
                <a href="http://localhost/formdatabase/config/logout.php">cerrar sesión</a>

        </div>
    <script src="/assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/bc3470d05e.js" crossorigin="anonymous"></script>
</body>
<script src="/assets/js/particles.js"></script>
<script src="/assets/js/app.js"></script>


</html>