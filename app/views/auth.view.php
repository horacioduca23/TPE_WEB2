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

    function showRegisterForm(){
        
        $smarty = new Smarty();

        $smarty->display('templates/showRegisterForm.tpl');
        
    }

    function viewUsers($users){
        $smarty = new Smarty();

        $smarty->assign('users', $users);

        $smarty->display('templates/showUsers.tpl');

    }

    function showEditUser($user) {
        $smarty = new Smarty();

        $smarty->assign('user', $user);

        $smarty->display('templates/showEditUser.tpl');

    }

}