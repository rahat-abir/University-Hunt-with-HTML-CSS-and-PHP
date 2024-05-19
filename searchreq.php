<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> University information </title>
  <link rel="stylesheet" href="style_searchreq.css">
</head>

<body>
  <div class="container1">
    <div class="content">
      <?php
      $data=$_GET['data'];
      $sql="SELECT * FROM `reqinfo` WHERE rank_=$data";
      $result=mysqli_query($conn,$sql);
      if($result){
        $row=mysqli_fetch_assoc($result);
        echo '<h1>'.$row['university_name_'].'</h1>';
        echo '<p1> Rank:                  '.$row['rank_'].'</p1><br>';
        echo '<p1> Location:              '.$row['location_'].'</p1><br>';
        echo '<p1> Vice-chancellor:       '.$row['vicechancellor_'].'</p1><br>';
        echo '<p1> Facultys:              '.$row['faculty_'].'</p1><br>';
        echo '<p1> Tution Fee:            '.$row['tutionfee_'].'</p1><br>';
        echo '<p1> Minimum required GPA:  '.$row['gpa_'].'</p1><br>';
        echo '<p1> Extra Facilities:      '.$row['extra_facilities_'].'</p1><br>';
        echo '<p1> University Website:    '.$row['site_'].'</p1><br>';
      }
      ?>
      <div class=content2>
        <button type="button button1">Approve</button>
        <button type="button button2">delete</button>
      </div>
    </div>

    
  </div>

  


</body>

</html>