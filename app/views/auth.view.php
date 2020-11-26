<?php

class AuthView {
    function showFormLogin(){
        
        $smarty = new Smarty();

        $smarty->display('templates/showLogin.tpl');
        
    }

    function showError($msg) {
       
        $smarty = new Smarty();
        
        $smarty->assign('msg', $msg);

        $smarty->display('templates/showError.tpl');

    }
}