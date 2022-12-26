<?php
$host="localhost";
$user="root";
$password="";
$db="shop";
try{
    $sql = new PDO("mysql:host=$host;dbname=$db",$user,$password);
}catch( Exception $e){
    echo "Connection failed: ". $e-> getMessage();
}