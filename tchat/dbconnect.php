<?php

//set connection variable
//Connexion a la base des donnes avec des fonctions de requestes; 

        /*  $dbhost='localhost';
          $dbuser='root';
          $dbpswd='root';
          $dbname='tchat';
         
//connection to server & data base
         
  $db = mysqli_connect('localhost','root','root','tchat');
*/
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

//INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, 'tititof', 'tititof@gmail.com', 'password'), (NULL, 'freddy', 'freddy@gmail.com', 'password');
/*
try{
        $db = new PDO('mysql:host='.$dbhost., $dbuser,$dbpswd,';dbname='.$dbname array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch(PDOexception $e){
        die("Une erreur est survenue lors de la connexion a la base de donnees");
    }
   } */

//chek connection

   if (mysqli_connect_errno()):

   printf("connect failed: %s\n", mysqli_connect_errno());
   exit();
   endif;


?>