<head><link rel="stylesheet" href="../styling/footer.css"></head>
<?php
function footer(){
    echo "
    <footer>
    <form action='../php/newsletter.php'class='sub-from'>
      <div class='inputBlock'>
        <label for='email'>email</label>
        <div class='subBlock'>
          <input type='text' name='email'id='email'  class='email' placeholder='example@.gmail.com'>
          <button name='join'>join</button>
        </div>  
      </div>
    </form>
    <div class='info'>
      <h3>Mokassarat</h3>
      <p>info@mysite.com</p>
      <div class='info2'>
        <a href='###'>Unsere AGB</a>
        <a href='###'>Datenschutzerklaerung</a>
        <a href='###'>Impressum</a>
        <a href='###'>Hinweise zu Cookies</a>
        <a href='###'>Hnweise zu Intressenbasierter</a>
      </div>
      <p class='copyRight'>
        <span class='material-icons'> copyright </span> 2022 by Mokassarat
      </p>
    </div>
  </footer>";
}