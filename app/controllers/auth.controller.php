<?php 

require_once 'app/views/auth.view.php';
require_once 'app/models/user.model.php';
require_once 'app/helpers/auth.helper.php';

class AuthController {
    private $view;
    private $model;
    private $authHelper;

    function __construct() {
        $this->view = new AuthView();
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();
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
            
            $this->authHelper->login($user);
            
            if($_SESSION['ROL']==1) {
                header("Location: " . BASE_URL . 'categories');
            } else if($_SESSION['ROL']==0) {
                header("Location: " . BASE_URL . 'home');        
            }


        }else{
            $this->view->showError('Un momento, datos incorrectos!');
        }
    }

    function logout() {
        $this->authHelper->logout();
    }

    function showRegisterForm() {
        $this->view->showRegisterForm();
    }

    function registerUser() {

        $rol = 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);

        if (empty($_POST['email']) || empty($_POST['password'])) {
            $msg = "Ambos campos son obligatorios, por favor intente nuevamente";
            $this->view->showError($msg);
            die;
        }

        //busco si el usuario ya existe

        $checked = $this->model->getByEmail($email);

        if (!($checked)) {
            $this->model->addUser($email, $hash, $rol);
            $this->loginUser();
        } else {
            $msg = "El email ingresado ya existe en nuestra base de datos.";
            $this->view->showError($msg);
        }
    }

    function showUsers() {
        $users = $this->model->getUsers();
        $this->view->viewUsers($users);

    }

    function editUser($id) {
        $user = $this->model->getUser($id);        //devuelve los datos del usuario para modificarlo
        $this->view->showEditUser($user);
    }

    function editedUser() {
        
        $idUser = $_POST['idUser'];
        $rol = $_POST['rol'];
       
        $user=$this->model->getUser($idUser);
        //var_dump($user);die;
        
        if($user->rol==1 && $idUser!= $_SESSION['ID_USER']){
            $msg = "No puedes editar un Usuario Administrador ";
            $this->view->showError($msg);die;
        }
        
        if($idUser!=$_SESSION['ID_USER']){
            $this->model->editUser($rol, $idUser);
            $this->showUsers();
        }else{
            $this->model->editUser($rol, $idUser);
            $this->logout();
        }   
    }

    function deleteUser($id) {
    
        $user=$this->model->getUser($id);
        
        if($id != $_SESSION ["ID_USER"] && ($user->rol != 1)){
            $this->model->deleteUser($id);
            $this->showUsers();
        }else{
            $msg = "No puedes eliminar un Usuario Administrador o eliminarte";
            $this->view->showError($msg);die;
        } 
    }
}