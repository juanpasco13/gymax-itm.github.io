<?php

class Info extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->title = 'Informacion';
        $this->view->render('info');
    }
}