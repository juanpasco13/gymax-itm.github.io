<?php
class UsersModel extends Model{

    function __construct(){
        parent::__construct();
    }


    function getUsers(){
        $data = [];
        $this->db->connect();
        $result = $this->db->getConnection()->query("SELECT * FROM `users`;");
        while ($row = $result->fetch_assoc()) {
            array_push($data, $row);
        }
        $this->db->closeConnec();
        return $data;
    }

    function getUserForId($id){
        $data = '';
        $query = "SELECT * FROM `users` WHERE `id` = '$id'";
        $this->db->connect();
        $result = $this->db->getConnection()->query($query);
        $this->db->closeConnec();
        return $result->fetch_assoc();
    }

    function getUserForUsername($user){
        $data = '';
        $query = "SELECT `user_name` FROM `users` WHERE `user_name` = '$user'";
        $this->db->connect();
        $result = $this->db->getConnection()->query($query);
        while ($row = $result->fetch_assoc()) {
            $data = $row;
        }
        $this->db->closeConnec();
        return $data;
    }

    function updateUser($data){
        var_dump($data);
        $query = "UPDATE `users` SET `name`=' " .$data['name']. "',`email`='" .$data['email']. "' WHERE `id` = '" .$data['id']. "';";
        $this->db->connect();
        $result = $this->db->getConnection()->query($query);
        $this->db->closeConnec();
        return $result; 
    }

    function loadBanner($id){
        include 'assets/img/banners/index.php';
        $banner = new Banner();
        return base64_decode($banner->message());
    }
}