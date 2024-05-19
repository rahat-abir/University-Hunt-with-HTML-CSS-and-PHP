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
    <h2>All NEW University Requests</h2>
    <table class="table">
    <?php
    $sql="SELECT * FROM `reqinfo`";
    $result=mysqli_query($conn,$sql);

    if($result){
      if(mysqli_num_rows($result)>0){
        echo '<thead>
        <tr>
        <th>Rank</th>
        <th>University name</th>
        <th>Senders id</th>
        </tr>
        </thead>';
        while($row=mysqli_fetch_assoc($result)){
        echo '<tbody>
        <tr>
        <td><a href="searchreq.php?data='.$row['rank_'].'">'.$row['rank_'].'</a></td>
        <td>'.$row['university_name_'].'</td>
        <td>'.$row['sender_id_'].'</td>
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