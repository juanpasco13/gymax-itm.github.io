<?php

class RegisterModel extends Model{

    function __construct(){
        parent::__construct();
    }

    function validateName($user){
        
        $data = '';
        $this->db->connect();
        $query = "SELECT `user_name`, `password`, `name` FROM `users` WHERE `user_name` = '$user'";
        $result = $this->db->getConnection()->query($query);
        while ($row = $result->fetch_assoc()) {
            $data = $row;
        }
        $this->db->closeConnec();
        return empty($data);
    }

    function registerUser($data){
        $id = uniqid();
        $date = date('Y-m-d h:i:s');
        $pass = md5($data['password']);
        $query = "INSERT INTO `users`(`id`, `user_name`, `password`, `date_created`, `last_con`, `name`, `email`)".
        " VALUES ('$id','".$data['username']."','$pass','$date','$date','".$data['name']."','".$data['email']."')";
        $this->db->connect();
        $this->db->getConnection()->query($query);
        $this->db->closeConnec();
        return true;
    }

}