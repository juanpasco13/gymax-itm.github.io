<?php

class App {

    function __construct(){
        session_start();
        $_SESSION['name'] ;
        $_SESSION['id'] ;
        $_SESSION['user'] ;

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);
        //var_dump($_SESSION['logged_in']);

        if($url[0] == 'validate'){
            $login = $this->loginSession();
            
            if($login->register($_POST['username'], $_POST['password'])){
                unset($_POST['username']);
                unset($_POST['password']);
                $_SESSION['logged_in'] = 1;
                $login->updateLogin($_SESSION['id']);
                header('Location: '.constant('URL').'home');
                
            }else{
                if ( $login->validateUser( $_POST['username'] ) ) {
                    $message = "Ingreso mal las credenciales";
                    $site = 'login';
                }else{
                    $message = "El usuario no existe, cree una cuenta";
                    $site = 'register';
                }
                ?>
                <script Language="JavaScript" type="text/javascript">
                    alert("<?php echo $message ?>");
                    window.location.href = window.location.protocol + "//" + window.location.host + '/gymax/<?php echo $site ?>';
                </script>
                <?php
            }
            
        }

        if($url[0] == 'logout'){
            $_SESSION['logged_in'] = 0;
            $_SESSION['id'] = 0;
            header('Location: '.constant('URL').'login');       
        }
        

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1){
            if($url[0] == 'login'){
                header('Location: '.constant('URL').'home');
            }else if ($url[0] == 'api'){
                $fileController = 'controllers/'.$url[1].'Controller.php';
                if(file_exists($fileController)){
                    include $fileController;
                    $controller = new $url[1];
                    $controller->loadModel($url[1]);
                    if(method_exists($controller, $url[2])){
                        $controller->{$url[2]}($url[3]);
                    }
                }
            }else if($url[0] == 'upuser'){
                include 'controllers/usersController.php';
                $controller = new Users();
                $controller->loadModel('users');
                $controller->updateUser($_POST);
                header('Location: '.constant('URL').'users');
            }else{
                $fileController = 'controllers/'.$url[0].'Controller.php';
                if(file_exists($fileController)){
                    include $fileController;
                    $controller = new $url[0];
                    $controller->loadModel($url[0]);
                    
                }else{
                    header('Location: '.constant('URL').'home');
                }
                $controller->render();
            }
            
        }else if($url[0] == 'register'){
            include 'controllers/registerController.php';
            $controller = new Register();
            $controller->render();
            
        }else if($url[0] == 'record'){
            include 'controllers/registerController.php';
            $controller = new Register();
            $controller->loadModel('register');
            if($controller->registerUser($_POST)){
                header('Location: '.constant('URL').'login');
            }else{
                ?>
                <script Language="JavaScript" type="text/javascript">
                    alert("Ese nombre de usuario ya existe, use otro");
                    window.location.href = window.location.protocol + "//" + window.location.host + '/gymax/register';
                </script>
                <?php
            }
            $controller->render();

        }else if ($url[0] == 'login'){
            $controller = $this->loginSession();
            $controller->render();
        }
    
        
        //echo '<script> console.log("'.$_SESSION['id'].'");</script>';
        
             
        //var_dump($_SESSION);
    }

    function loginSession(){
        include 'controllers/loginController.php';
        $controller =  new Login();
        $controller->loadModel('Login');
        return $controller;
    }
    
}