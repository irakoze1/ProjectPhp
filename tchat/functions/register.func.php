<?php
   // require_once('dbconnect.php');
   //session_start();
   //include('dbconnect.php');
    

    public function email_taken($email){
        global $DB;
        $e = array('email' => $email);
        $sql = $DB("SELECT * FROM users WHERE email = :email");
        $req = $DB->prepare($sql);
        $req->execute($e);
        $free = $req->rowCount($sql);

        return $free;
    }

    public function register($name, $email, $password){
        global $DB;
        $r = array(
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
        );
        $sql = $DB("INSERT INTO 'users' ('name', 'email', 'password') VALUES(NULL,'$name','$email','$password')");
        $req = $DB->prepare($sql);
        $req->execute($r);
    }



    /*.    $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            echo "<br/>";

                $my_query ="";

                $my_query ="SELECT * FROM users WHERE name = '$name' email = '$email' AND password = '$password' ";
                $result = mysqli_query($connection, $my_query);

                if (mysqli_num_rows($result) > 0) {
                    echo "mail is already";
                }
                else{
                    $my_query = "INSERT INTO users (name, email,passsword) VALUES ('$name', '$email', '$password')";
                    echo "<br/>";
                    $result = mysqli_query($connection, $my_query);

                }

                mysqli_close();*/