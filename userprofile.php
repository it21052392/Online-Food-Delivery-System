<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/slideshow1.css">
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
    <header class="header">
      <nav class="navbar">
        <a href="#" class="nav-logo"
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
    
      <br>
      <div  class="form">
        <form action="action_page.php" method="post"> 
            <fieldset>
                <legend>USER FORM</legend>
            <div class="row">
              <div class="col-25">
                <label for="cid">CID</label>
              </div>
              <div class="col-75">
                <input type="text" id="cid" name="cid"   value="<?php echo $_SESSION['user_id']; ?>" disabled>
              </div>
              <div class="col-25">
                <label for="fname">First Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="I1" placeholder="First name" value="<?php echo $_SESSION['first_name']; ?>">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="lname">Last Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="lname" name="I2" placeholder="Last name"  value="<?php echo $_SESSION['last_name']; ?>">
              </div>
            </div>
            <div class="row">
                <div class="col-25">
                  <label for="Email">E-mail</label>
                </div>
                <div class="col-75">
                  <input type="email" id="email" name="I3" placeholder="Email" value="<?php echo $_SESSION['email'] ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="number">Contact No</label>
                </div>
                <div class="col-75">
                  <input type="text" id="number" name="I4" placeholder="Contact no" value="<?php echo $_SESSION['1phone_no']; ?>">
                </div>
              </div>
               <div class="row">
                <div class="col-25">
                  <label for="address">Adress</label>
                </div>
                <div class="col-75">
                  <input type="text" id="address" name="I5" placeholder="Address" value="<?php echo $_SESSION['address']; ?>">
                </div>
              </div>
               <div class="row">
                <div class="col-25">
                </div>
              </div>

              <div class="row">
                <div class="col-25">
                  <label for="password">Password</label>
                </div>
                <div class="col-75">
                  <input type="password" id="password" name="I6" placeholder="Password" value="<?php echo $_SESSION['pass']; ?> " disabled>
                </div>
              </div>
            <div class="row">
              <input type="submit" value="Update">
            </div>
            </fieldset>
            </form>
            <img src="./images/logo.png" alt="Logo">
            
    </div>
    </div>
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
