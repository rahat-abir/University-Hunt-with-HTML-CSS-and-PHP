<?php

include "db_conn.php";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['collage']) && isset($_POST['password']) && isset($_POST['repet_password'])){

  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  }

  $name = $_POST['name'];
  $pass = $_POST['password'];
  $rpass = $_POST['repet_password'];
  $collage = $_POST['collage'];
  $email = $_POST['email'];

  if(empty($name)){
    header("location: signup.php?error=name is required");
    exit();
  }else if(empty($pass)){
    header("location: signup.php?error=Password is required");
    exit();
  }else if(empty($rpass)){
    header("location: signup.php?error=Repet Password is required");
    exit();
  }else if(empty($email)){
    header("location: signup.php?error=email is required");
    exit();
  }else if(empty($collage)){
    header("location: signup.php?error=collage is required");
    exit();
  }else if($rpass != $pass){
    header("location: signup.php?error=Passwords do not match");
    exit();
  }else{
    $emailquery= "select * from signup where email_='$email' ";
    $query = mysqli_query($conn,$emailquery);
    $emailcount = mysqli_num_rows($query);

    if($emailcount > 0){
      header("location: signup.php?error=Email already exists.");
      exit();
    }else{
      $insertquery = "INSERT INTO `signup`(`ID`, `name_`, `email_`, `collage_`, `pass_`) VALUES (NULL, '$name','$email','$collage','$pass');";
      $iquery = mysqli_query($conn, $insertquery);

      $insertquery = "INSERT INTO `login`(`ID`, `username_`, `password_`) VALUES (NULL, '$email','$pass');";
      $iquery = mysqli_query($conn, $insertquery);

      if($iquery){
        header("location: home1.html");
        exit();
      }else{
        header("location: signup.php?error=There was an error, please try again later");
        exit();
      }

    }

  }


}else{
  header("location: signup.php");
  exit();
}