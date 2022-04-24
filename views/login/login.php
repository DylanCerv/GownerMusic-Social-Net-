<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GownerMusic</title>
    <link rel="stylesheet" href="<?= media()?>/style.css">
</head>
<body>

    <main class="main-login">
        <div class="imagen">
            <img src="img/cover.jpg" alt="Imagen de login">
        </div>
        <div class="formulario">
            <div class="contenedor-formulario-login">
                <h1>GownerMusic</h1>
                <form class="formulario-login" method="post" action="modules/login.php">
                    <input type="text" placeholder="Usuario o Email" name="usernameLogin" id="usernameLogin" >
                    <input type="password" placeholder="Contraseña" name="passwordLogin" id="passwordLogin" ><!--required-->
                    <button>Iniciar Session</button>
                </form>
                <div class="separacion">
                    <img src="img/separacion.jpg" alt="Separacion">
                </div>
                <div class="boton-login-google">
                    <button><img src="" alt="Img Google"> Iniciar Sesion con Google</button>
                </div>
                <a  href="" class="recuperar-contraseña">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="registro">
                <p>¿No tienes una cuenta?
                    <a href="?cm=singup&m=register">REGISTRATE</a>
                </p>
            </div>
        </div>
    </main>


    <footer>
        <div class="enlaces">
            <p>
                <a href="">Informacion</a>
                <a href="">Ayuda</a>
                <a href="">Privacidad</a>
                <a href="">Condiciones</a>
                <a href="">Cunetas destacadas</a>
                <a href="">Hashtags</a>
            </p>
            <p>Español &copy; 2022 from Gowner</p>
        </div>
    </footer>
</body>
</html>