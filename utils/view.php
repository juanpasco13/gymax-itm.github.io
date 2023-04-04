<?php
class View{
    public $datos;
    public $title;
    
    function render($name) { 
        require 'views/'.$name.'.php';
    }
}

