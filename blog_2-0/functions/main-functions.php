<?php
    $dbhost = 'localhost';
    $dbname = 'blog';
    $dbuser = 'root';
    $dbpswd = '';

    try{
    	$db = new PDO('mysql:host='.$dbhost.';$dbname='.$dbname.,$dbuser,$dbpsw,array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    }catch(PDOexception $e){
    	die("une erreur est survenue lors de la connexion a ala base des nonne");

    }
?>