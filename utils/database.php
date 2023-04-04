<?php 

class Database{

    private $connection = null;
    private $host;
    private $db;
    private $user;
    private $password;
    

    public function __construct(){  
        $this->host = constant('servename');
        $this->db = constant('dbname');
        $this->user = constant('username');
        $this->password = constant('password');
    }

    function connect() {

        $this->connection = new \mysqli($this->host,$this->user,$this->password,$this->db);
        if($this->connection->connect_error){
            die ('Fallo al conectar a MySQL: '. $this->connection->connect_error);
        }

    }

    public function closeConnec(){
        //echo "Conexion Cerrada";
        $this->connection->close();
    }

    public function setConnection($connection){
        $this->connection = $connection;
    }

    public function getConnection(){
        return $this->connection;
    }


}

?>