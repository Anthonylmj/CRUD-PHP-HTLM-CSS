<?php

session_start();

if (isset($_SESSION['userlogged'])) {

    header("location:http://localhost/formdatabase/view/principal.php");

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

    <div id="particles-js"></div>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="/formdatabase/config/login.php" class="formulario__login" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name="user" id="name" placeholder="Usuario">
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                    <button>Entrar</button>
                    <span style="color:#e9e9e9">______________</span>
                    <span><i class="fab fa-github fa-lg"></i><a href="https://github.com/Anthonylmj" target="_blank" style="color:#000000;"> Anthonylmj</a></span>
                </form>

                <!--Register-->
                <form action="" class="formulario__register" method="get">
                    <h2>Registro</h2>
                    <input type="text" name="name" id="name" placeholder="Nombre">
                    <input type="text" name="lastname" id="lastname" placeholder="Apellido">
                    <input type="text" name="adress" id="adress" placeholder="Dirección">
                    <input type="text" name="phone" id="phone" placeholder="Teléfono">
                    <input type="text" name="email" id="email" placeholder="Correo">
                    <input type="text" name="user" id="user" placeholder="Usuario">
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                    <button type="submit" name="m" value="guardar">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="/assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/bc3470d05e.js" crossorigin="anonymous"></script>
</body>
<script src="/assets/js/particles.js"></script>
<script src="/assets/js/app.js"></script>

</html>