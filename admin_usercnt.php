<?php
include "db_conn.php";
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style_admin_usercnt.css" />
    <link herf="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <title>ADMIN Home page</title>
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <img src="logo_main.png" class="logo">
        <nav>
          <ul>
            <li><a href="admin_usercnt.php">User Count</a></li>
            <li><a href="addapproveuniversity.php">Add University</a></li>
            <li><a href="getreq.php">Universiy Requests</a></li>
          </ul>
        </nav>
        <img src="menu.png" class="menu-icon">
      </div>
      <div class="cnt">
        <h1>The user count is</h1>
        <?php
          $sql="SELECT count(*) FROM information_schema.columns WHERE table_name = 'signup';";
          $result=mysqli_query($conn,$sql);
  
          if($result){
            if(mysqli_num_rows($result)>0){
              $row=mysqli_fetch_assoc($result);
              echo "<h1 style='color:red;'>. ".$row['count(*)']." .</h1>";
            }else{
              echo '<h2 class=text-danger>Data not found</h2>';
            }
          }
        ?>
      </div>
      



    </div>









  
  </body>
</html>