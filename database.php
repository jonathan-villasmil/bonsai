<?php
$server = "localhost";
$username= "root";
$password= "";
$database = "bonsai_php_login";
try{
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password); 
} catch (PDOException $e)   {
    die("Conection failed: ".$e->getMessage());
}
?>