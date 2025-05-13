<?php
  header('Access-Control-Allow-Origin: *');
 $conn = new mysqli("localhost","root","","clinic");

  if(mysqli_connect_error()){
      echo mysqli_connect_error();
      exit();
  }
  else{
      $Firstname = $_POST['Firstname'];
      $Lastname = $_POST['Lastname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $gender = $_POST['gender'];

      $sql = "INSERT INTO info(Firstname,Lastname,email,password,gender) VALUES('$Firstname','$Lastname','$email' , '$password' , '$$gender');";
      $res = mysqli_query($conn, $sql);

      if($res){
          echo "Success!";
      }
      else{
          echo "Error!";
      }
      $conn->close();
  }

?>