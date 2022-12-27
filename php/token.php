<?php
    $errorMessage="";
    session_start();
    if(isset($_SESSION['email'])){
        $userEmail= $_SESSION['email'];
    }else{
        header("location:logincon.php");
    }

    if(isset($_SESSION['tok-error'])){
        if($_SESSION['tok-error']==true){
            $errorMessage=' <p class="errorMessage"> koden er forkert </p>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <script defer src="../js/form.js"></script>
    <link rel="stylesheet" href="../styling/from/formn.css">
    <!-- js link -->
    <title>forgetPassword</title>
</head>
<body>
    <main class="fromSection">
        <form action="./tokenCon.php" method="POST">
        <p class="infoText">koden blev sendt til <span><?= $userEmail?></span> , indtast venligst koden i nedenstående indtastningsfelt</p>
            <?= $errorMessage?> 
                <!-- the  container input email -->
                <div class="inputBlock">
                    <label for="token">code :</label>
                    <input type="text" name="token" id="token"  >
                </div>
                <button name="sendCode">Send kode ernuet</button>
        </form>
    </main>
</body>
</html>