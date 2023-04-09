<?php

session_start();

include 'connect.php';


$user = $_POST['user'];
$password = $_POST['password'];
$password = hash('sha512', $password);

$validate = mysqli_query($conn, "SELECT * FROM users WHERE user='$user' and password='$password'");

if (mysqli_num_rows($validate) > 0) {

    $_SESSION['userlogged'] = $user;

    header("location:http://localhost/formdatabase/view/principal.php");
    exit;
} else {

    echo '<script>
                    alert("Usuario y/o Contraseña incorrectos, intentelo nuevamente");
                    window.location = "http://localhost/formdatabase";
              </script>      
        ';
    exit;
}

?>