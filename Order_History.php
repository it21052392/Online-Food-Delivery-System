<?php session_start();?>
<?php

     $_server_name = "localhost";
     $user_name = "root";
     $password ="";
     $database = "test";

     $connection = new mysqli($_server_name,$user_name,$password,$database);

     if($connection -> connect_error){
         die("connection error");
     }
     ?>
    <?php
$y=$_SESSION['user_id'];
$sql = 'SELECT oid,order_description FROM cart WHERE cid ='.$y.'';

$result = mysqli_query($connection, $sql);

$cart = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($connection);

?>


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
            <link href="https://fonts.googleapis.com/css2?family=Azeret+Mono:ital,wght@0,300;0,400;1,200;1,300;1,400&family=Montserrat:wght@100;200;300;400;700&display=swap" rel="stylesheet" />

            <!-- icons -->

            <script src="https://kit.fontawesome.com/5f4515a83f.js" crossorigin="anonymous"></script>




            <style>
                #customers {
                    font-family: Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 50%;
                }
                
                #customers td,
                #customers th {
                    border: 1px solid #ddd;
                    padding: 8px;
                }
                
                #customers tr:nth-child(even) {
                    background-color: #f2f2f2;
                }
                
                #customers tr:hover {
                    background-color: #ddd;
                }
                
                #customers th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #04AA6D;
                    color: white;
                }
                
                .tbl {
                    display: flex;
                    justify-content: center;
                    position: relative;
                    bottom: 12%;
                }
            </style>




        </head>

        <body>
            <header class="header">
                <nav class="navbar">
                    <a href="#" class="nav-logo"><img class="logo" src="./images/logo.png"></img>
                    </a>


                    <div class="nav-user">
                        <button class="btn-cart btn-cart-outline"><a class="nav-log " href=""><i class="fas fa-cart-plus"></i>
                        CART</a> </button>
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
            <h1 align="center">ORDER HISTORY</h1>
            <div class="tbl">
                <table class="table" mar id="customers">
                    <tr>
                        <th>Order Number</th>
                        <th>Food Name</th>
                    </tr>
                    <?php foreach($cart as $menu): ?>
                    <tr>
                        <form>

                            <td>
                                <?php echo htmlspecialchars($menu['oid']); ?>
                            </td>

                            <td>
                                <?php echo htmlspecialchars($menu['order_description']); ?>
                            </td>

                            <!-- <td td><?php echo htmlspecialchars($menu['cid']); ?></td> -->

                        </form>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <footer class="footer ">
                <div class="footer-social ">
                    <i class="fab fa-instagram fa-2x "></i>
                    <i class="fab fa-facebook fa-2x "></i>
                    <i class="fab fa-google-plus-g fa-2x "></i>
                    <i class="fab fa-twitter-square fa-2x "></i>
                </div>
                <div class="footer-text ">
                    <a class="footer-link " href="# ">Job opportunities</a> |
                    <a href="# ">Our Members</a> |
                    <a href="https://www.google.com/ ">Terms and conditions</a> |
                    <a href="# ">Service Area</a> |
                    <a href="# ">Order history</a> |
                    <a href="# ">Privacy policy</a> |
                    <a href="# ">Rating & reviews</a> |
                    <a href="# ">FAQ</a>
                </div>
                <div class="copyright ">©️2020 Ocean08 All Rights Reserved</div>
                <div class="payment-icons ">
                    <i class="fab fa-cc-mastercard fa-2x "></i>
                    <i class="fab fa-cc-amex fa-2x "></i>
                    <i class="fab fa-cc-visa fa-2x "></i>
                </div>
            </footer>
        </body>
        </html>