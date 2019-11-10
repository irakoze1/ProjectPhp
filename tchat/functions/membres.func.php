<?php
   require_once('dbconnect.php');
   
    function get_membres(){
        global $connection;
        $req = $connection->query("SELECT * FROM users");
        $results = array();
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }