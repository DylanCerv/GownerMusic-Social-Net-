
<?php
foreach ($_SESSION['postsPerfilDATA'] as $dataPostsPerfil){
?>

<div class="publicacion">
    <div class="publicacion-perfil">
        <a href="?cm=pagei&m=perfil&i=<?= $dataPostsPerfil['id_user']?>">
            <?php
            if ($dataPostsPerfil['img_perfil'] != ""){
            ?>
                <img src="<?= $dataPostsPerfil['img_perfil']?>" alt="foto de perfil">
            <?php
            }else{
            ?>
                <img src="img/user_anonimo.jpg" alt="foto de perfil">
            <?php
            }
            ?>
            <h4><?= $dataPostsPerfil['username_perfil']?></h4>
        </a>
    </div>
    <div class="publicacion-contenido">
        <p><?= $dataPostsPerfil['content']?></p>

        <?php
        if ($dataPostsPerfil['media_dir'] != ""){
        ?>
            <img src="<?= $dataPostsPerfil['media_dir'] ?>" alt="publicacion-documento">
        <?php
        }
        ?>

    </div>
</div>

<?php
}
?>