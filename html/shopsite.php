<?php
require "./header.php";
require "../html/footer.php";
session_start();
$checkUser=false;
if(isset($_SESSION['user'])){
  $checkUser=true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alle produkter</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="styling.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styling/shopsite styling/shop.css">
<body>
<?php head($checkUser)?>
<!-------- Products --->
<section>
    <h2 class="title"> alle produkter</h2>
    <div class="productsBlock">
        <div class="product">
            <img src="https://imgs.search.brave.com/-7NQwx_yabwfBlRTdryaDtFAcsJUAeDtBco9DM9Sz1I/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9zcmMu/ZGlzY291bnRvLmRl/L3BpY3MvQW5nZWJv/dGUvMjAxOC0wOS8y/Njk0OTY1LzQxNDMw/OThfR0VOVVNTLVBM/VVMtRWRlbC1OdXNz/LU1peC0xMS05OC1F/VVItMS1rZ19vcmln/aW5hbC5qcGc" alt="">
            <h4 class="ProductName"> velsmagende nødder </h4>
            <div class="rating">
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons">star_border </i>
            </div>
            <p class="price">50.00 Øre</p>
        </div>
        <div class="product">
            <img src="https://imgs.search.brave.com/85mbWh_sfI8jzgLDZaUGu3QhMaBSixGbICLUES7QMHA/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9zN2cx/MC5zY2VuZTcuY29t/L2lzL2ltYWdlL2Fs/ZGkvMjAyMTA1MzEw/MTI3" alt="">
            <h4 class="ProductName"> velsmagende nødder </h4>
            <div class="rating">
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons">star_half </i>
                <i class="material-icons">star_border </i>
            </div>
            <p class="price"> 50.00 Øre</p>
        </div>
        <div class="product">
            <img src="https://imgs.search.brave.com/SfQ82jOQcfgsQGYe1ANyocl5hJE8qp0GCjbc1KoQY1s/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9pbWFn/ZXMuZGVyc3RhbmRh/cmQuYXQvaW1nLzIw/MTcvMDEvMTEvMTMw/MXJvblRlc3QyLmpw/Zz93PTE2MDAmcz02/OTcyMmRhOQ" alt="">
            <h4 class="ProductName"> velsmagende nødder </h4>
            <div class="rating">
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons">star_half </i>
            </div>
            <p class="price"> 50.00 Øre</p>
        </div>
        <div class="product">
            <img src="../imges/pro_1.jpg" alt="">
            <h4 class="ProductName"> velsmagende nødder </h4>
            <div class="rating">
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons">star_border </i>
            </div>
            <p class="price"> 50.00 Øre</p>
        </div>  
        <div class="product">
            <img src="https://imgs.search.brave.com/-7NQwx_yabwfBlRTdryaDtFAcsJUAeDtBco9DM9Sz1I/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9zcmMu/ZGlzY291bnRvLmRl/L3BpY3MvQW5nZWJv/dGUvMjAxOC0wOS8y/Njk0OTY1LzQxNDMw/OThfR0VOVVNTLVBM/VVMtRWRlbC1OdXNz/LU1peC0xMS05OC1F/VVItMS1rZ19vcmln/aW5hbC5qcGc" alt="">
            <h4 class="ProductName"> velsmagende nødder </h4>
            <div class="rating">
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons">star_border </i>
            </div>
            <p class="price"> 50.00 Øre</p>
        </div>      
        <div class="product">
            <img src="https://imgs.search.brave.com/-7NQwx_yabwfBlRTdryaDtFAcsJUAeDtBco9DM9Sz1I/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9zcmMu/ZGlzY291bnRvLmRl/L3BpY3MvQW5nZWJv/dGUvMjAxOC0wOS8y/Njk0OTY1LzQxNDMw/OThfR0VOVVNTLVBM/VVMtRWRlbC1OdXNz/LU1peC0xMS05OC1F/VVItMS1rZ19vcmln/aW5hbC5qcGc" alt="">
            <h4 class="ProductName"> velsmagende nødder </h4>
            <div class="rating">
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons">star_border </i>
            </div>
            <p class="price"> 50.00 Øre</p>
        </div> 
        <div class="product">
            <img src="https://imgs.search.brave.com/-7NQwx_yabwfBlRTdryaDtFAcsJUAeDtBco9DM9Sz1I/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9zcmMu/ZGlzY291bnRvLmRl/L3BpY3MvQW5nZWJv/dGUvMjAxOC0wOS8y/Njk0OTY1LzQxNDMw/OThfR0VOVVNTLVBM/VVMtRWRlbC1OdXNz/LU1peC0xMS05OC1F/VVItMS1rZ19vcmln/aW5hbC5qcGc" alt="">
            <h4 class="ProductName"> velsmagende nødder </h4>
            <div class="rating">
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons">star_border </i>
            </div>
            <p class="price"> 50.00 Øre</p>
        </div>
        <div class="product">
            <img src="https://imgs.search.brave.com/-7NQwx_yabwfBlRTdryaDtFAcsJUAeDtBco9DM9Sz1I/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9zcmMu/ZGlzY291bnRvLmRl/L3BpY3MvQW5nZWJv/dGUvMjAxOC0wOS8y/Njk0OTY1LzQxNDMw/OThfR0VOVVNTLVBM/VVMtRWRlbC1OdXNz/LU1peC0xMS05OC1F/VVItMS1rZ19vcmln/aW5hbC5qcGc" alt="">
            <h4 class="ProductName"> velsmagende nødder </h4>
            <div class="rating">
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons">star_border </i>
            </div>
            <p class="price"> 50.00 Øre</p>
        </div>
        <div class="product">
            <img src="https://imgs.search.brave.com/-7NQwx_yabwfBlRTdryaDtFAcsJUAeDtBco9DM9Sz1I/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9zcmMu/ZGlzY291bnRvLmRl/L3BpY3MvQW5nZWJv/dGUvMjAxOC0wOS8y/Njk0OTY1LzQxNDMw/OThfR0VOVVNTLVBM/VVMtRWRlbC1OdXNz/LU1peC0xMS05OC1F/VVItMS1rZ19vcmln/aW5hbC5qcGc" alt="">
            <h4 class="ProductName"> velsmagende nødder </h4>
            <div class="rating">
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons">star_border </i>
            </div>
            <p class="price"> 50.00 Øre</p>
        </div>
        <div class="product">
            <img src="https://imgs.search.brave.com/-7NQwx_yabwfBlRTdryaDtFAcsJUAeDtBco9DM9Sz1I/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9zcmMu/ZGlzY291bnRvLmRl/L3BpY3MvQW5nZWJv/dGUvMjAxOC0wOS8y/Njk0OTY1LzQxNDMw/OThfR0VOVVNTLVBM/VVMtRWRlbC1OdXNz/LU1peC0xMS05OC1F/VVItMS1rZ19vcmln/aW5hbC5qcGc" alt="">
            <h4 class="ProductName"> velsmagende nødder </h4>
            <div class="rating">
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons"> star</i>
                <i class="material-icons">star_border </i>
            </div>
            <p class="price"> 50.00 Øre</p>
        </div>
    </div>
</section>
<?php footer()?>

</body>
</html>