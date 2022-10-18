<?php

   include 'connection.php';
   

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $text = $_POST['text'];

      $request = " insert into form(name, email, text) values('$name','$email','$text') ";
      mysqli_query($conn, $request);
      header('location: index.php'); 


   }else{
      echo 'something went wrong please try again!';
   }

   ?>
