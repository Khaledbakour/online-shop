<?php 
require("./database.php");
session_start();
$errorMessage="";
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password= md5($_POST['password']);
        $checkDataInDB = $sql->prepare("SELECT * FROM users WHERE   EMAIL= '$email' AND passwort='$password'");
        $checkDataInDB->execute();
        $userCount= $checkDataInDB-> rowCount();
        if($userCount!= 0){
            header("location:../homepage/homepage.html");
            $_SESSION['error']=false;
        }else{
            header("location:./login.php");
        }
    } 
    $_SESSION['error']=true;
?>