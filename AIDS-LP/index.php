<?php

// require_once('db.php');



    if(isset($_POST['submit'])){

      $name = $_POST['name'];

      $email = $_POST['email'];

      $phone = $_POST['phone'];

      $city = $_POST['city'];

  

      $sql = "INSERT INTO student_data (name,email,phone,city) VALUES ('$name', '$email', '$tel', '$course', '$city')";

  

      if(mysqli_query($conn, $sql)){

      header('Location: thankyou.php');

      exit;

          

      }else{

          echo "Fields Required";

      }

  }










?>