<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/slideshow.css">
    <link rel="stylesheet" href="./css/home.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Azeret+Mono:ital,wght@0,300;0,400;1,200;1,300;1,400&family=Montserrat:wght@100;200;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- icons -->

    <script
      src="https://kit.fontawesome.com/5f4515a83f.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div>
        welcome <?php echo $_SESSION['first_name'];?> <a href="logout.php" id="logout">LogOut</a>
        <?php?>
    </div>
    <header class="header">
      <nav class="navbar">
        <a href=index.php" class="nav-logo"
          ><img class="logo" src="./images/logo.png"></img
        ></a>


        <div class="nav-user">
          <button class="btn-cart btn-cart-outline"><a class="nav-log " href=""><i class="fas fa-cart-plus"></i> CART</a> </button>
           <div class="dropdown">
           <butto class="dropdown btn-user"> <i class=" fas fa-user fa-4x"></i></button>
            <div class="dropdown-content">
              <a href="#">MY ACCOUNT</a>
              <a href="#">LOGIN</a>
              <a href="#">SIGN UP</a>
            </div>
          </div>
        </div>
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="#" class="nav-link">HOME</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">FOOD</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">OFFERS</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">CONTACT US</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="./images/Image01.jpg" style="width:100%">
      </div>
      
      <div class="mySlides fade">
        <img src="./images/Image02.jpg" style="width:100%">
        
      </div>
      
      <div class="mySlides fade">
        <img src="./images/Image04.jpg" style="width:100%">
      </div>
      
      </div>
      <br>
      
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>

      <script src="./java script/slider.js"></script>
  <h2>SRILANKAN FOOD</h2>
  <!-- <hr> -->

 <div class="items-flex-container">
   <div class="flex-item-left">
     <img class="item-img" src="images/chikenfc.png" alt="chkfc">
     <h3 class="item-name">Chicken fried rice</h3>
     <p class="item-name">Rs.450/-</p>
     <button class="btn-addcart"><i class="fas fa-shopping-cart"></i></i> Add to List</button>
   </div>
   <div class="flex-item-left">
     <img class="item-img" src="images/nasi.png" alt="nasi">
     <h3 class="item-name">Nasi goreng</h3>
     <p class="item-name">Rs.650/-</p>
     <button class="btn-addcart"><i class="fas fa-shopping-cart"></i></i> Add to List</button>
   </div>
   <div class="flex-item-left">
     <img class="item-img" src="images/chkkottu.png" alt="seafc">
     <h3 class="item-name">chicken kottu</h3>
     <p class="item-name">Rs.400/-</p>
     <button class="btn-addcart"><i class="fas fa-shopping-cart"></i></i> Add to List</button>
   </div>
   <div class="flex-item-left">
     <img class="item-img" src="images/ricencurry.png" alt="veg">
     <h3 class="item-name">chicken rice and curry</h3>
     <p class="item-name">Rs.300/ -</p>
     <button class="btn-addcart"><i class="fas fa-shopping-cart"></i></i> Add to List</button>
   </div>
</div>

<h2>WESTERN FOOD</h2>
<!-- <hr> -->

<div class="items-flex-container">
  <div class="flex-item-left">
    <img class="item-img" src="images/crispychk.png" alt="crispychk">
    <h3 class="item-name">Spicy crispy chicken</h3>
    <p class="item-name">Rs.880/ -</p>
    <button class="btn-addcart"><i class="fas fa-shopping-cart"></i></i> Add to List</button>
  </div>
  <div class="flex-item-right">
    <img class="item-img" src="images/noodles.png" alt="noodles">
    <h3 class="item-name">Noodles</h3>
    <p class="item-name">Rs.350/-</p>
    <button class="btn-addcart"><i class="fas fa-shopping-cart"></i></i> Add to List</button>
  </div>
  <div class="flex-item-left">
    <img class="item-img" src="images/pizza.png" alt="pizza">
    <h3 class="item-name">Large Pizza</h3>
    <p class="item-name">Rs.2100/-</p>
    <button class="btn-addcart"><i class="fas fa-shopping-cart"></i></i> Add to List</button>
  </div>
  <div class="flex-item-right">
    <img class="item-img" src="images/burgers.png" alt="Burgers">
    <h3 class="item-name">Burgers</h3>
    <p class="item-name">Rs.650/-</p>
    <button class="btn-addcart"><i class="fas fa-shopping-cart"></i></i> Add to List</button>
  </div>
</div>

   <h2>DESSERTS</h2>
 <!-- <hr> -->

 <div class="items-flex-container">
   <div class="flex-item-left">
     <img class="item-img" src="images/cake.jpg" alt="cake">
     <h3 class="item-name">Family Cake</h3>
     <p class="item-name">Rs.1300/-</p>
     <button class="btn-addcart"><i class="fas fa-shopping-cart"></i></i> Add to List</button>
   </div>
   <div class="flex-item-right">
     <img class="item-img" src="images/watalapam.png" alt="watalapam">
     <h3 class="item-name">Watalappan</h3>
     <p class="item-name">Rs.150(Per peice)</p>
     <button class="btn-addcart"><i class="fas fa-shopping-cart"></i></i> Add to List</button>
   </div>
 </div>


  <hr size="5">
    <footer class="footer">
      <div class="footer-social">
        <i class="fab fa-instagram fa-2x"></i>
        <i class="fab fa-facebook fa-2x"></i>
        <i class="fab fa-google-plus-g fa-2x"></i>
        <i class="fab fa-twitter-square fa-2x"></i>
      </div>
      <div class="footer-text">
        <a class="footer-link" href="#">Job opportunities</a>
        |
        <a href="#">Our Members</a>
        |
        <a href="https://www.google.com/">Terms and conditions</a>
        |
        <a href="#">Service Area</a>
        |
        <a href="#">Order history</a>
        |
        <a href="#">Privacy policy</a>
        |
        <a href="#">Rating & reviews</a>
        |
        <a href="#">FAQ</a>
      </div>
      <div class="copyright">©️2020 Ocean08 All Rights Reserved</div>
      <div class="payment-icons">
        <i class="fab fa-cc-mastercard fa-2x"></i>
        <i class="fab fa-cc-amex fa-2x"></i>
        <i class="fab fa-cc-visa fa-2x"></i>
      </div>
    </footer>
  </body>
</html>
