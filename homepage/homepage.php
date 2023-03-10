<?php
require "../html/header.php";
require "../html/footer.php";
session_start();
$checkUser=false;
if(isset($_SESSION['user'])){
  $checkUser=true;
}
?>
<!DOCTYPE html>
<html lang="dk">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="new.css" />
    <link rel="stylesheet" href="mobil.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <title>homepage</title>
  </head>
  <body>
  <?php head($checkUser)?>
    <div class="firstcontent">
      <img src="../store-master/mixed-1938302_1920.jpg" />
      <div class="content-child">
        <h1>Lorem ipsum <br />dolor sit amet</h1>
      </div>
    </div>
    <div id="aboutUs" class="secondcontent">
      <h2>About Us</h2>
      <br/>
      <p>
        Mokassarat is a well-renowned online store that has continually featured
        a variety of high-quality and affordable products since day one.
        <br/>
        <br/>
        Our passion for excellence has driven us from the beginning, and
        continues to drive us into the future.  The team at Mokassarat
        knows that every product counts, and strives to make the entire shopping
        experience as rewarding and fun as possible. Check out our store and
        special offers, and get in touch with questions or requests.
      </p>
    </div>  
    <div class="slider">
      <div class="slide-track">
        <div class="slide">
          <img src="https://cdn.pixabay.com/photo/2013/01/05/14/21/hazelnuts-73939_1280.jpg" />
        </div>
        <div class="slide">
          <img src="https://cdn.pixabay.com/photo/2014/08/26/21/28/nuts-428544__480.jpg" />
        </div>
        <div class="slide">
          <img src="https://cdn.pixabay.com/photo/2016/07/28/20/32/cashew-cores-1549580_1280.jpg" />
        </div>
        <div class="slide">
          <img src="https://cdn.pixabay.com/photo/2018/11/27/14/14/nuts-3841539_1280.jpg" />
        </div>
        <!-- SAME 4 SLIDES (DOUBLE) -->
        <div class="slide">
          <img src="../store-master/All_you_need_to_know_about_nuts.jpg" />
        </div>
        <div class="slide">
          <img src="../store-master/nut-assortment.jpg" />
        </div>
        <div class="slide">
          <img src="../store-master/Nut_health_benefits1_1_1024x.jpg" />
        </div>
        <div class="slide">
          <img src="../store-master/nuts-royalty-free-image-478718079-1538675210.jpg" />
        </div>
      </div>
    </div>
    <div id="contact" class="contact-container">
      <div class="contact">
        <h1>CONTACT</h1>
        <p>Hier schreib einfach die Firmen Adresse</p>
        <p>E-mail das Firma</p>
        <p>Telefon nummer des Firma</p>
      </div>
      <form action="">
        <table>
          <div class="ne-container input-container ">
            <div class="name input-block">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" />
            </div>

            <div class="email input-block">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" />
            </div>
          </div>

          <div class="pa-container  input-container">
            <div class="phone input-block">
              <label for="phone">Phone</label>
              <input type="number" id="phone" name="phone" min="10" max="12" />
            </div>

            <div class="adresse input-block">
              <label for="adresse">Adresse</label>
              <input type="text" id="adresse" name="adresse" />
            </div>
          </div>

          <div class="subject input-block">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" />
          </div>

          <div class="message input-block">
            <label for="message">Message</label>
            <textarea
              id="message"
              name="message"
              rows="10"
              cols="50"
            ></textarea>
          </div>

          <button type="submit">Submit</button>
        </table>
      </form>
    </div>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9138.435041371773!2d9.343719407241883!3d55.067589141245904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b35446fd291cc9%3A0x8b7faa2572fc19de!2sLunds%20Bageri!5e0!3m2!1sar!2sde!4v1671919697852!5m2!1sar!2sde"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>

     <?php footer()?>
  </body>
</html>
