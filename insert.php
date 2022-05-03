<?php

require_once('db.php');



    if(isset($_POST['submit'])){

      $name = $_POST['name'];

      $email = $_POST['email'];

      $phone = $_POST['phone'];

      $city = $_POST['city'];

  

      $sql = "INSERT INTO course_aids_dp (name,email,phone,city) VALUES ('$name', '$email', '$phone', '$city')";

  

      if(mysqli_query($conn, $sql)){

      header('Location: index.html');

      exit;

          

      }else{

          echo "Fields Required";

      }

  }










?>