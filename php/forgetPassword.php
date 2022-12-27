<?php
require("./database.php");
$errorMessage="";
session_start();
if(isset($_SESSION['emi-error'])){
    if($_SESSION['emi-error']==1){
        $errorMessage="<p class='errorMessage'>e-mailen findes ikke i databasen </p>";
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
        <form action="./passwordCon.php" method="POST">
        <p class="infoText">Indtast din e-mailadresse her for at sende en besked til din e-mailadresse</p>
                <?= $errorMessage?>
                <!-- the  container input email -->
                <div class="inputBlock">
                    <label for="email">email :</label>
                    <input type="text" name="email" id="email"  class="email">
                </div>
                <button name="passwordReset">nulstille</button>
        </form>
    </main>
</body>
</html>