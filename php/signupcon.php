
<?php
// get the database 
require("./database.php");
session_start();
if(isset($_POST['signup'])){
    // variables
    $fName=$_POST['firstName'];
    $lName=$_POST['lastName'];
    $email=$_POST['email'];
    $password_1=$_POST['password'];
    $password_2=$_POST['passwordAgain'];
    $phoneNumber=$_POST['phoneNumber'];
    // check if the user already exists in the database
    $checkDataInDB = $sql->prepare('SELECT * FROM users WHERE   EMAIL= "'.$email.'"');
    $checkDataInDB->execute();
    $userCount= $checkDataInDB->rowCount();
    // if the user is new
        if($userCount==0){     
            //add it to the database
            $password_2= md5($password_2);
            $addData= $sql->prepare("INSERT INTO users(firstName, lastName, email, passwort, phoneNr) VALUES('$fName', '$lName', '$email', '$password_2', '$phoneNumber')");
            $addData->execute(); 
            header('location:./login.php');
            $_SESSION['sin-error']=false;
        }
        else{    
            // Message received that the user is not new
            header('location:./signup.php');
            $_SESSION['sin-error']=true;
        }
    }
?>