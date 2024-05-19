<?php
  $email= $_POST['email'];
  $uname= $_POST['uname'];
  $rank= $_POST['rank'];
  $VC= $_POST['VC'];
  $faculty= $_POST['faculty'];
  $tutionfee= $_POST['tutionfee'];
  $gpa= $_POST['gpa'];
  $facili= $_POST['facili'];
  $site= $_POST['site'];

  $conn = new mysqli('localhost', 'root', '' , 'demo');
  if($conn->connect_error){
    die('Connection failed : '.$conn->connect->connect_error);
  }else{
    $stmt = $conn->prepare("insert into reqinfo(university_name_, rank_, location_, vicechancellor_, 	faculty_, tutionfee_, gpa_,extra_facilities_,site_ )
    values(?,?,?,?,?,?,?,?,?)");
    $stmt-> bind_param("sssssssss",$email,$uname,$rank,$VC,$faculty,$tutionfee,$gpa,$facili,$site);
    $stmt->execute();
    echo "data entry successful...";
    $stmt->close();
    $conn->close();

  }

?>