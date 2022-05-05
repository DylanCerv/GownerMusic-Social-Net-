<?php

require_once "modules/perfil.php";

?>



<?php #HEAD
    require_once "views/template/head/head.php";
?>

<body>
    
    <?php require_once "views/template/nav/nav.php"; ?>

    <main class="perfil">
        <div class="contenedor-perfil">
            <div class="profile">
                <div class="contenedor-perfil-usuario">
                    <div class="fotos">
                        <img src="https://media-exp1.licdn.com/dms/image/C4D16AQGKgCxFE9D5Xg/profile-displaybackgroundimage-shrink_200_800/0/1644900203321?e=1654732800&v=beta&t=plNZlVVT8oIjV8IEXffbO-3MQcvlEO1LEE_vb2p5UZY" alt="foto-portada" class="foto-portada">
                        <img src="img/user_anonimo.jpg" alt="foto-perfil" class="foto-perfil">
                        <h3 class="nombre-usuario"><?= $_SESSION['username_perfil']?></h3>
                    </div>
                    <div class="descripcion-user">
                        <p> <?= $_SESSION['description_perfil'] ?> </p>
                    </div>
                </div>
                <hr>
                <?php require_once "sec.views/perfil.publicaciones.php"; ?>
            </div>
        </div>
        <div class="contenedor-derecho">
            <div class="publicidad">
                <a href="http://#"><img src="#" alt="Imagen Publicidad"></a>
            </div>
            <div class="contenedor-chat">
                
            </div>
        </div>
    </main>

</body>
</html>