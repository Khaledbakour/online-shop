<?php
require("./database.php");
$errorMessage="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="../styling/from/formn.css">
    <!-- js link -->
    <script defer src="../js/form.js"></script>
    <title>forgetPassword</title>
</head>
<body>
    <main class="fromSection">
        <form action="passwordCon" method="POST">
        <h1>Indtast din e-mailadresse her for at sende en besked til din e-mailadresse</h1>
                <?= $errorMessage?>
                <!-- the  container input email -->
                <div class="inputBlock">
                    <label for="email">email :</label>
                    <input type="text" name="email" id="email"  class="email">
                </div>
                <button name="login">Send besked</button>
        </form>
    </main>
</body>
</html>