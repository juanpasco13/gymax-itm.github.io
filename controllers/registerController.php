<?php

class Register extends Controller{
    function __construct(){
        parent::__construct();
    }

    function registerUser($data){
        if($this->model->validateName($data['username'])){
            $this->model->registerUser($data);
            return true;
        }
        return false;
    }

    function render(){
        $this->view->render('login/register');
    }
}