<?php 
require("./database.php");
session_start();
$errorMessage="";
    if(isset($_POST['passwordChang'])){
        $password= md5($_POST['passwordAgain']);
        $email=$_SESSION['email'];
        echo $password;
        echo '<br>';
        echo $email;
        $checkDataInDB = $sql->prepare("UPDATE users SET passwort = '$password' WHERE email = '$email'");
        $checkDataInDB->execute();
        header("location:./login.php");
    } 
?>
