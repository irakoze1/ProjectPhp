<?php
   // require_once('dbconnect.php');

   public function user_exist($email,$password){
        global $DB;
        $u = array(
            'email'=>$email,
            'password'=>$password
        );

        $sql = $DB("SELECT * FROM users WHERE email=:email AND password=:password");
        $req = $DB->prepare($sql);
        $req->execute($u);
        $exist = $req->rowCount($sql);
        return $exist;
    }

            


