<?php

class URLsControllers{


    public function URLRegister(){
        if (!empty($_GET)){
            if ($_GET['cm'] == 'singup' && $_GET['m'] == 'register'){
                require_once "models/singup.php";
            }
        }else{
            require_once "../models/singup.php";
        }
    }

    public function URLLogin(){
        if (!empty($_GET)){
            if ($_GET['cm'] == 'login' && $_GET['m'] == 'log'){
                require_once "models/login.php";
            }
        }else{
            require_once "../models/login.php";
        }
    }

    public function URLPerfil(){
        if (!empty($_GET)){
            if ($_GET['cm'] == 'pagei' && $_GET['m'] == 'perfil'){
                require_once "models/perfil.php";
            }
        }else{
            require_once "../models/login.php";
        }
    }


    public function URLPosts(){
        if (!empty($_GET)){
            if ($_GET['cm'] == 'posts' && $_GET['m'] == 'new'){
                require_once "models/posts.php";
            }
        }else{
            require_once "../models/posts.php";
        }
    }

}