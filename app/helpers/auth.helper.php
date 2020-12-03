<?php

class AuthHelper {
    function __construct(){}

    function userLogged() {
        session_start();
        if(isset($_SESSION['IS_LOGGED'])) {
            $rol = $_SESSION['ROL'];
            return $rol;
        }
        return false;      
    }
  
    //Barrera de seguridad para usuario logeado
    function checkLogged(){
        if(!isset($_SESSION ['ID_USER']) || ($_SESSION ['ROL']) == 0) {
            header("Location: " . BASE_URL . "login");
            die;
        }else{
            return true;
        }
    }

    function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'login');
    }

    function login($user) {
        //armo la sesion del usuario
        //UTILIZO ESTO PARA VERIFICAR QUE ESTE LOGEADO EN LUGARES QE YO NO QUIERO Q ENTRE
        session_start();
        $_SESSION['IS_LOGGED'] = true;
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['EMAIL_USER'] = $user->email;
        $_SESSION['ROL'] = $user->rol;
    }

}