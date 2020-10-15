<?php

class AuthView {
    function showFormLogin(){
        require_once 'templates/header.php';
        require_once 'templates/form_login.php';       
        require_once 'templates/footer.php';
    }

    function showError($msg) {
        echo "<h1> ERROR!</h1>";
        echo "<h2> $msg </h2>";
    }
}