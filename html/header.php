

<head>
<link rel="stylesheet" href="../styling/header.css">

</head>

<?php

    
    
function head($b=false){
$logElement=" <a href='../php/login.php'><span class='material-icons'> account_circle </span></a>";
if($b==true){
   $logElement="<a href='##'>myacount</a>";
}
  
  echo    "<header>
  <h1>Mokassarat</h1>
  <div class='burger'><span class='material-icons'> menu </span></div>
    <ul>
      <li><a href='../homepage/homepage.php'>hjemmeside</a></li>
      <li><a href='../html/shopsite.php'>Shop</a></li>
      <li><a href='#aboutUs'>om os</a></li>
      <li><a href='#contact'>kontakt</a></li>
      <li>
        $logElement
      </li>
     
      <li>
        <a href='###'><span class='material-icons'> shopping_bag </span></a>
      </li>
    </ul>
</header>";
}