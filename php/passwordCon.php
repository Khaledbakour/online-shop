<?php 
require("./database.php");
require("./mail.php");

session_start();
$errorMessage="";
    if(isset($_POST['passwordReset'])){
        $email=$_POST['email'];
        $checkDataInDB = $sql->prepare("SELECT * FROM users WHERE   email = '$email' ");
        $checkDataInDB->execute();
        $userCount= $checkDataInDB-> rowCount();
        if($userCount!= 0){
            // create a random string
            function getName($n) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $randomString = '';
            
                for ($i = 0; $i < $n; $i++) {
                    $index = rand(0, strlen($characters) - 1);
                    $randomString .= $characters[$index];
                }
                return $randomString;
            }
            $token =getName(10);
            $checkDataInDB = $sql->prepare("UPDATE users SET token = '$token' WHERE email = '$email'; ");
            $checkDataInDB->execute();
            $_SESSION['emi-error']=false;

            $mail->setFrom('nordermarkt@gmail.com');
            $mail->addAddress("$email"); 
            $mail->Subject = 'the token';
            $mail->Body ="thi is the token<b>$token </b>";
            $mail->send();
       echo"done";
            header("location:token.php");

        }else{
                echo "not done";
        header("location:forgetPassword.php");
        }
      
        $_SESSION['email']=$email;
    } 
   
  

    $_SESSION['emi-error']=true;
?>