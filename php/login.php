
<?php 
session_start();
$errorMessage="";
if(isset($_SESSION['sin-error'])){
    $_SESSION['sin-error']=false;
}
if( isset($_SESSION['log-error'])){ 
    if($_SESSION['log-error']==1){
        $errorMessage= "<p class='errorMessage'>Adgangskode eller adgangskode er forkert</p>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- css link -->
    <link rel="stylesheet" href="../styling/from/formn.css">

    <!-- js link -->
    <script  defer src="../js/form.js"></script>
    <!-- google icon & fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <main class="fromSection">
 <!-- form -->
        <form action=" ./logincon.php" method="POST"><!-- action="login.php" method="post" -->
            <h1>logge ind</h1>
            <?= $errorMessage?>
            <!-- the  container input email -->
            <div class="inputBlock">
                <label for="email">email :</label>
                <input type="text" name="email" id="email"  class="email">
            </div>
            <!-- the  container input password -->
            <div class="inputBlock">
                <label for="password">password:</label>
                <input type="password" name="password" id="password" class="password" >
                <span class="material-icons eyeIcon">visibility_off</span>
            </div>
            <!-- the log in button-->
            <button name="login">logge ind</button>

            <div class="formFooter">
                <a class="link" href="./signup.php"> Sign Up</a>
                <a class="link" href="./forgetPassword.php">adgangskode glemt</a>
            </div>
         
        </form>
    </main>
   
</body>
</html>