<?php

session_start();
include "db_conn.php";

if(isset($_POST['uname']) && isset($_POST['password'])){

  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  }

  $uname = $_POST['uname'];
  $pass = $_POST['password'];

  if(empty($uname)){
    header("location: index.php?error=Username is required");
    exit();
  }else if(empty($pass)){
    header("location: index.php?error=Password is required");
    exit();
  }else{
    $sql="SELECT * FROM login WHERE username_='$uname' AND password_='$pass'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);
      if($row['username_'] === $uname && $row['password_'] === $pass){
        $SEASSION['username_'] === $row['username_'];
        $SEASSION['name'] === $row['name'];
        $SEASSION['id'] === $row['id'];
        header("Location: home1.html");
        exit();
      }else{
        header("location: index.php?error=Username or Password incorrect");
        exit();
      }
    }else{
      header("location: index.php?error=Username or Password incorrect");
      exit();
    }

  }


}else{
  header("location: index.php");
  exit();
}