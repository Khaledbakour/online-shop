
<?php
$errorMessage="";
session_start();
if(isset($_SESSION['log-error'])){
    $_SESSION['log-error']=false;
}
if(isset($_SESSION['sin-error'])){ 
    if($_SESSION['sin-error']==true){
        $errorMessage= "<p class='errorMessage'>brugernavnet eller e-mailen er forkert</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <!-- css link -->
    <link rel="stylesheet" href="../styling/from/formn.css">
    <!-- js link -->
    <script defer src="../js/form.js"></script>
    <!-- google icons & fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <main class="fromSection">
        <!-- form -->
        <form  action="./signupcon.php" method="post"  >
            <h1>register</h1>
            <!-- the  container input First name -->
            <?= $errorMessage?>
            <div class="inputBlock">
                <label for="firstName">fornavn :</label>
                <input type="text" name="firstName" id="firstName" placeholder="nico" >
            </div>
            <!-- the  container input First name -->
            <div class="inputBlock">
                <label for="lastName">navn :</label>
                <input type="text" name="lastName" id="Name" placeholder="jensen" >
            </div>
            <!-- the  container input email -->
            <div class="inputBlock">
                <label for="email">eamil :</label>
                <input type="text" name="email" id="email" class="email" placeholder="nicojensen.@gmai.com">
            </div>
            <!-- the  container input password -->
            <div class="inputBlock">
                <label for="password">password :</label>
                <input type="password" name="password" id="password" class="password" placeholder="***">
                <span class="material-icons eyeIcon">visibility_off</span>
            </div>
            <!-- the  container input password -->
            <div class="inputBlock">
                <label for="passwordAgain">password again :</label>
                <input type="password" name="passwordAgain" id="passwordAgain" class="password" placeholder="***">
                <span class="material-icons eyeIcon">visibility_off</span>
            </div>
            <!-- the  container input password -->
            <div class="inputBlock">
                <label for="phoneNumber">Telefonnummer :</label>
                <input type="number" name="phoneNumber" id="phoneNumber"  placeholder="123-12321456" >
            </div>
            <!-- the log in button-->
            <button  name="signup">register</button>
            <div class="formFooter">
                <a class="link" href="./login.php"> logge ind</a>
            </div>
        </form>
    </main>
   
</body>
</html>