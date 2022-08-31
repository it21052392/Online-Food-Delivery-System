<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/slideshow.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/checkout.css">
  

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

<style>
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.frm-div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  display:block;
  width: 50%;
  margin-left: 26%;
}


</style>

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
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
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
    <br>
    <div class = "Payment-form  frm-div" >
      <form  action="action.php" method="post">
  
    <fieldset class="frame">
   <!--Div tag for inside of the form-->
    <div class="all-form"><br>
        <h3 id="toping">Shipping Details</h3>
       
       
     <div class="shipping">
       <label id="Name" > Name</label> <br>
            <input class="txtin" type = "text" placeholder="John Doe" name = "name" required  > <br>
      <label id="Address">Address</label> <br>
            <input class="txtin"  type = "text" placeholder="12/b Kandy" name = "address" required > <br>
       <label id="Email">Email</label> <br>
            <input class="txtin" type = "text" placeholder="johndoe@abc.com"  name = "email"> <br><br>
       </div>
       
       <div class ="PMethod">
         <input type = "radio" name="cash-online" value="cash" checked onclick="disable();" > Cash on delivery 
         <input type = "radio" name="cash-online" value="online"> Online Payment <br>
       </div>
      
       <h3 id="toping">Online Payment Information</h3>
    <div class="OnlinePay"> 
       <label name="cardnumber">Card No</label><br>
          <input class="txtin" type="text" placeholder="1111-2222-3333-4444" required name="cardnumber"><br>
        <label name="exp">Expire Date</label><br>
           <input class="txtin" type=text placeholder="MM/YY" required name="exp"><br>
        <label name="CCV"> CCV </label> <br>
           <input class="txtin" type="text" placeholder="217" required name="ccv"><br>
    </div>
       
       <div class  ="sum-btn">
           <br>
           <input type="submit" value="Order now"> <br>
       </div>
     </form>
     </div>
    </div>
  </fieldset>
  <br> 
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

    <script>
      function disable()
      {
        document.getElementsByClassName(OnlinePay).disabled=true;
      }
    </script>
  </body>
</html>
