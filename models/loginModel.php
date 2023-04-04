<?php

class LoginModel extends Model{

    function __construct(){
        parent::__construct();
    }

    function validateLogin($user, $password) {
        //session_start();
        $data = [];
        $query = "SELECT `user_name`, `password`, `name`, `id` FROM `users` WHERE `user_name` = '$user'";
        $this->db->connect();
        $result = $this->db->getConnection()->query($query);
        while ($row = $result->fetch_assoc()) {
            array_push($data, $row);
        }
        $this->db->closeConnec();
        if (!empty($data)){
           if (strcmp( $data[0]['password'], $password) == 0 ){
            $_SESSION['name'] = $data[0]['name'];
            $_SESSION['id'] = $data[0]['id'];
            $_SESSION['user'] = $data[0]['user_name'];
            return 1;
           }
        }
        return 0;
    }
    
    function validateUser($id){
        include 'models/usersModel.php';
        $user = new UsersModel();
        return !empty($user->getUserForUsername($id));
    }

    function updateLogin($id){
        $time = date('Y-m-d H:i:s');
        $query = "UPDATE `users` SET `last_con`='$time' WHERE id = '$id';";
        $this->db->connect();
        $this->db->getConnection()->query($query);
        $this->db->closeConnec();
        return true;
    }

    //INSERT INTO `users`(`id`, `user_name`, `password`, `date_created`, `last_con`, `name`) VALUES ('642a113027449', 'admin','admin','2023-04-02 18:00:00','2023-04-02 18:00:00','Administrator');
}