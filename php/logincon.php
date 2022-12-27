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
            header("location:../homepage/homepage.php");
            $allData= $checkDataInDB->fetchAll();
             $user=$allData[0]['firstName'];
            $_SESSION['user']=$user;

            $_SESSION['log-error']=false;
            
        }else{
            header("location:./login.php");
            $_SESSION['log-error']=true;
        }
    } else{
        header("location:./login.php");

    }
?>