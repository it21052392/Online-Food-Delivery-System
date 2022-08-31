<?php

     $_server_name = "localhost";
     $user_name = "root";
     $password ="";
     $database = "ofd";

     $connection = new mysqli($_server_name,$user_name,$password,$database);

     if($connection -> connect_error){
         die("connection error");
     }
     




?>