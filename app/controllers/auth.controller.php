<?php 

require_once 'app/views/auth.view.php';
require_once 'app/models/user.model.php';
class AuthController {
    private $view;
    private $model;

    function __construct() {
        $this->view = new AuthView();
        $this->model = new UserModel();
    }

    function showLogin() {
        $this->view->showFormLogin();
    }

    function loginUser() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Verifico campos obligatorios
        if (empty($email) || empty($password)){
            $this->view->showError('Faltan datos obligatorios');
            die();
        }

        //obtengo el usuario
        $user = $this->model->getByEmail($email);


        // Si el usuario existe y las contraseñas existen..
        if ($user && password_verify($password, $user->password)) {

            //armo la sesion del usuario
            //UTILIZO ESTO PARA VERIFICAR QUE ESTE LOGEADO EN LUGARES QE YO NO QUIERO Q ENTRE
            session_start();
            $_SESSION['ID_USER'] = $user->id;
            $_SESSION['EMAIL_USER'] = $user->email;

            
            header("Location: " . BASE_URL . 'categories');

        }else{
            $this->view->showError('Un momento, contraseña incorrecta!');
        }
    }

    function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'login');
    }
}