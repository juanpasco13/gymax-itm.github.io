<?php

class Users extends Controller{
    function __construct(){
        parent::__construct();
    }

    function loadUser($id = ""){
        echo json_encode($this->model->getUserForId($id));
    }

    function updateUser($data){
        return $this->model->updateUser($data);
    }

    function load($id){
        echo $this->model->loadBanner($id);
    }

    function render(){
        $this->view->datos = $this->model->getUsers();
        $this->view->title = 'Usuarios';
        $this->view->render('users/users');
    }
}