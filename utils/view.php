<?php
class View{
    
    function render($name) { 
        require 'views/'.$name.'.php';
    }
}

