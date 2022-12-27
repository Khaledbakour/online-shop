<?php 
require("./database.php");
session_start();
$errorMessage="";
    if(isset($_POST['sendCode'])){
        $email= $_SESSION['email'];
        $code= $_POST['token'];
        $checkDataInDB = $sql->prepare("SELECT * FROM users WHERE   EMAIL= '$email' AND token='$code'");
        $checkDataInDB->execute();
        $userCount= $checkDataInDB-> rowCount();
        if($userCount!= 0){
            header("location:./newpassword.php");
            $_SESSION['tok-error']=false;
        }else{
            header("location:./token.php");
            $_SESSION['tok-error']=true; 
        }
    } 
    else{
        header("location:./login.php");

    }

?>