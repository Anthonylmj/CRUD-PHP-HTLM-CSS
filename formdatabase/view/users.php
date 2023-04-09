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
    <title>Users</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/style_read.css">
</head>

<body style="overflow-x:hidden">

    <div id="particles-js"></div>
    <div class="header">
        <h1 style="padding: 15px 30px;"><center>USERS MANAGMENT</center></h1>
        <button class="button_back" onclick="location.href='http://localhost/formdatabase/view/principal.php'"><===</button>
    </div>
    <div class="table_div">
        <table id="users">
            <tr>
                <td>
                    <center>Id</center>
                </td>
                <td>
                    <center>Nombre</center>
                </td>
                <td>
                    <center>Apellido</center>
                </td>
                <td>
                    <center>Dirección</center>
                </td>
                <td>
                    <center>Teléfono</center>
                </td>
                <td>
                    <center>Correo</center>
                </td>
                <td>
                    <center>Usuario</center>
                </td>
            </tr>
            <?php

            include '../config/connect.php';

            $data = "SELECT * from users";
            $result = mysqli_query($conn, $data);

            while ($show = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td>
                    <center><?php echo $show['id'] ?></center>
                    </td>
                    <td>
                    <center><?php echo $show['name'] ?></center>
                    </td>
                    <td>
                    <center><?php echo $show['lastname'] ?></center>
                    </td>
                    <td>
                    <center><?php echo $show['adress'] ?></center>
                    </td>
                    <td>
                    <center><?php echo $show['phone'] ?></center>
                    </td>
                    <td>
                    <center><?php echo $show['email'] ?></center>
                    </td>
                    <td>
                    <center><?php echo $show['user'] ?></center>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    <script src="/assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/bc3470d05e.js" crossorigin="anonymous"></script>
</body>
<script src="/assets/js/particles.js"></script>
<script src="/assets/js/app.js"></script>


</html>