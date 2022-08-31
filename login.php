<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php require_once('inc/connection.php'); ?>
<?php session_start();?>
<?php

$errors = array();
$Email ="";
$passwrd ="";
   
   // check for form submission
   if(isset($_POST['submit'])){

    
// check if the username and password has been entered
       if(!isset($_POST['email'])|| strlen(trim($_POST['email']))<1)
       {
           $errors[] = 'Email is Missing/ Invalid';
       }
       if(!isset($_POST['pass'])|| strlen(trim($_POST['pass']))<1)
       {
           $errors[] = 'Password is Missing/ Invalid';
       }

   // check if there are any errors in the form
   if(empty($errors))
   {
       //save username and password into variables
       $Email = $_POST['email'];
       $passwrd = $_POST['pass'];
       $hashpasswrd = sha1($passwrd); // hashed password
      
   }

     // prepare database query
     $query = "SELECT * FROM customer
                WHERE email = '{$Email}'
                AND pass = '{$hashpasswrd}'
                limit 1";

    $result_set = mysqli_query($connection,$query);
         if ($result_set)
             {
                  if(mysqli_num_rows($result_set) == 1)
                    {
                      // get data for session 
                      $customer =mysqli_fetch_assoc($result_set);
                      $_SESSION['user_id']=$customer['c_no'];
                      $_SESSION['last_name']=$customer['c_lname'];
                      $_SESSION['first_name']=$customer['c_fname'];
                      $_SESSION['1phone_no']=$customer['phone_no'];
                      $_SESSION['address']=$customer['address'];
                      $_SESSION['pass']=$customer['pass'];
                      $_SESSION['email']=$customer['email'];
                      
                      //if user is valid redirect to home page
                      header("Location:home.php");                      
                    }
                   else
                   {
                          //user name or password invalid
                         $errors[] = 'Invalid Email/Password';
                 
                   }

                }
           else
            {
              // when query failed collect error for errors array
              $errors[] ='Database query failed';
              echo"<script> alert('database')</script>";
            }
    } 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/customer_login.css">
<script src="jsfun.js"></script> 

</head>
<body>
<div class="form-popup" id="myForm">
    <form action="login.php" class="form-container" method="POST">
  
      
      <img src="images/123.jpg" alt="logo" width="300px" height="300px" class="logo">
      <h1>LOG IN</h1>
      <label for="email"><b>Email</b></label> 
      <input type="text" placeholder="Enter Email" name="email" required>
  
      <label for="password"><b>Password</b></label><input type="checkbox" onclick="pawvisi()" id="chek">Show Password
      <script>
        // password visible invisible function
        function pawvisi() {

            var x = document.getElementById("paw");
            if (x.type === "password") {
            x.type = "text";
            } else {
            x.type = "password";
            }
         }

      </script>
      <input type="password" placeholder="Enter Password" name="pass" id="paw" required>
      <?php
           if(isset($errors) && !empty($errors))
           {
             // when error array is not empty display error in interface
             echo'<div class="alert" id="er">
             <span class="closebtn" onclick="closeerror()">&times;</span> 
             <strong>Invalid!</strong> Email or Password.            
             </div>';   
             echo'<script>
             function closeerror(){
                document.getElementById("er").style.display = "none"
             }
               </script>'; 
           }
      ?>
      <button type="submit" name ="submit" class="btn login">LOG IN</button>
      <button type="button" class="btn cancel" onclick="window.location.href='http://localhost/ofd/iindexx.html';"id="cancel" >CANCEL</button>
      <a href="http://localhost/ofd/forgetpass.php" class="forget"><p id ="fp">Forget Password</p></a> 
      
   </form>
  </div>
  </body>
  </html> 