<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> All Unniversities </title>
  <link rel="stylesheet" href="text.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container_1">
    <h2>List of All Universities</h2>
    <table class="table">
    <?php
    $sql="SELECT * FROM `university_info`";
    $result=mysqli_query($conn,$sql);

    if($result){
      if(mysqli_num_rows($result)>0){
        echo '<thead>
        <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Location</th>
        <th>Tution fee</th>
        </tr>
        </thead>';
        while($row=mysqli_fetch_assoc($result)){
        echo '<tbody>
        <tr>
        <td><a href="university_info.php?data='.$row['rank_'].'">'.$row['rank_'].'</a></td>
        <td>'.$row['university_name_'].'</td>
        <td>'.$row['location_'].'</td>
        <td>'.$row['tutionfee_'].'</td>
        </tr>
        </tbody>';
        }
      }else{
        echo '<h2 class=text-danger>Data not found</h2>';
      }
    }
      ?>
      </table>

  </div>
</body>

</html>