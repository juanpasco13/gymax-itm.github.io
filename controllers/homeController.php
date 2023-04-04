<?php

class Home extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){

        $this->view->title = 'Dashboard';
        $this->view->render('home/home');
    }
}
