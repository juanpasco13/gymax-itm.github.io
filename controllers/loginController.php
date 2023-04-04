<?php 

class Login extends Controller{

    function __construct(){
        parent::__construct();
        $_SESSION['logged_in'] = 0;
    }

    function register($user, $password){
        return $this->model->validateLogin($user, MD5($password) );
    }

    function validateUser($user){
        return $this->model->validateUser($user);
    }

    function updateLogin($id){
        return $this->model->updateLogin($id);
    }

    function render(){
        $this->view->render('login/login');
    }

    
}