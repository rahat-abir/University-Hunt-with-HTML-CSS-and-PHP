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
    header("location: admin_login.php?error=Username is required");
    exit();
  }else if(empty($pass)){
    header("location: admin_login.php?error=Password is required");
    exit();
  }else if($uname=="uhunt_admin@123" && $pass=="hunt123"){
    header("Location: admin_usercnt.php");
    exit();
  }else{
    header("location: admin_login.php?error=Username or password incorrect");
    exit();
  }


}else{
  header("location: index.php");
  exit();
}