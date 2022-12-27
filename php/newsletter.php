<head><script defer src="../js/form.js"></script></head> 
<?php 
require("./database.php");
session_start();
$errorMessage="";
    if(isset($_POST['join'])){
        $email=$_POST['email'];
        $password= md5($_POST['password']);
        $checkDataInDB = $sql->prepare("SELECT * FROM  WHERE newsletter   email= '$email'");
        $checkDataInDB->execute();
        $userCount= $checkDataInDB-> rowCount();
        if($userCount!= 0){
            // header("location:../homepage/homepage.php");
            // $addNewsletter= $sql->prepare("INSERT INTO");
            echo "not new";
            
        }else{
            echo"is new";
            // header("location:./login.php");
        }
    } else{
        // header("location:../homepage/homepage.php");
        
    }

