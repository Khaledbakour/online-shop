
<?php
    $errorMessage="";

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
        <form action="./newpasswordcon.php" method="POST"><!-- action="login.php" method="post" -->
            <p class="infoText">skriv dit nye kodeord</p>
           
            <?= $errorMessage?>
            
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
            <!-- the log in button-->
            <button name="passwordChang">redde</button>

         
        </form>
    </main>
</body>
</html>