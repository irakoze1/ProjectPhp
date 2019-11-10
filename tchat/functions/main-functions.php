<?php

    // require_once('dbconnect.php');

     class connexion{
       private $host='localhost';
       private $name='tchat';       
       private $user="root";
       private $pswd='root';
       private $db;

       function __construct($host = null, $name = null, $user = null, $pswd = null)
       {
        if ($host != null){
            $this->host = $host;
            $this->name = $name;
            $this->user = $user;
            $this->psw  = $pswd;
        }
        try{
        $this->db = new PDO('mysql:host=' . $this->host. ';dbname='.$this->name, $this->user,$this->pswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch(PDOException $e){
        die("Une erreur est survenue lors de la connexion a la base de donnees");
    }
   }
public function query($sql, $data = array()){
    $req = $this->db->prepare($sql);
    $req->execute($data);

    return $req;
   }
   public function insert($sql, $data = array()){
    $req = $this->db->prepare($sql);
    $req->execute($data);
   }
  }
        
$DB = new connexion();




/*
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password $_POST['passsword'];
     $req = "insert into users (name,email,password) values ('$name','$email','$password')";
    mysqli_query($codb,$req);

      /*session_start();
        $dbhost='localhost';
        $dbname='tchat';
        $dbuser='root';
        $dbpswd='root';
        
        

   /**
    * Connextion a la base de donnes avec fonctions requetes
    */
   /*
      session_start();
      class connexionDB {
       private $dbhost='localhost';
       private $dbuser='root';
       private $dbpswd='root';
       private $dbname='tchat';
       private $db;

       function_construct($dbhost = null, $dbuser = null, $dbpswd = null, $dbname = null)
       {
        if ($dbhost != null){
            $this->dbhost = $dbhost;
            $this->dbuser = $dbuser;
            $this->dbpswd = $dbpswd;
            $this->dbname = $dbname;
        }
        try{
        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser,$dbpswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch(PDOexception $e){
        die("Une erreur est survenue lors de la connexion a la base de donnees");
    }
   }*/

   /*
   public function query($sql, $data = array()){
    $req = $db->prepare($sql);
    $req->execute($data);

    return $req;
   }
   public function insert($sql, $data = array()){
    $req = $db>prepare($sql);
    $req->execute($data);
   }
  }
        
//$DB = new connexionDB();

    /*$dbhost = 'localhost';
    $dbname = 'tchat';
    $dbuser = 'root';
    $dbpswd = ''; */

    


    function isLogged(){
        if(isset($_SESSION['tchat'])){
            $logged = 1;
        }else{
            $logged = 0;
        }
        return $logged;
    }

    /*  $name = $_GET['name'];
            $email = $_GET['email'];
            $password = $_GET['password'];

                    echo "<br/>";

                $my_query ="";
                $my_query =";"*/

    ?>

