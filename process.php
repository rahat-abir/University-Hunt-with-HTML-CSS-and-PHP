<?php

include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["submitStudent"])) {
    // Process student form data
    $studentName = sanitizeInput($_POST["studentName"]);
    $collage = sanitizeInput($_POST["collage"]);
    $email = sanitizeInput($_POST["email"]);
    $Result = sanitizeInput($_POST["Result"]);
    $pass = sanitizeInput($_POST["pass"]);

    $emailquery= "select * from signup where email_='$email' ";
    $query = mysqli_query($conn,$emailquery);
    $emailcount = mysqli_num_rows($query);

    if($emailcount > 0){
      header("location: signup.php?error=Email already exists.");
      exit();
    }else{
      $insertquery = "INSERT INTO `signup`(`ID`, `name_`, `email_`, `collage_`, `result`, `pass_`) VALUES (NULL, '$studentName','$email','$collage','$Result','$pass');";
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
  } elseif (isset($_POST["submitStaff"])) {
    // Process staff form data
    $semail = sanitizeInput($_POST["staffemail"]);
    $staffName = sanitizeInput($_POST["staffName"]);
    $responsibility = sanitizeInput($_POST["responsibility"]);
    $universityId = sanitizeInput($_POST["universityId"]);
    $spass = sanitizeInput($_POST["pass"]);


  }
}

function sanitizeInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>