<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Search bar </title>
  <link rel="stylesheet" href="style_search.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

 <div class="container1">
  <form method="post" action="" class="search-bar">
    <input type="text" placeholder="Search Universities (name/rank/location)" name="search">
    <button type="submit" name="submit"><img src="search.png"></button>
  </form>


  <div class="container my-5">
    <table class="table">
      <?php
      if(isset($_POST['submit'])){
        $search=$_POST['search'];

        $sql="Select * from university_info where university_name_ like '%$search%'
        or rank_ like '%$search%' or location_ like '%$search%'";
        $result=mysqli_query($conn,$sql);

        if($result){
          if(mysqli_num_rows($result)>0){
            echo '<thead>
            <tr>
            <th>Name</th>
            <th>Rank</th>
            <th>Location</th>
            </tr>
            </thead>';
            while($row=mysqli_fetch_assoc($result)){
            echo '<tbody>
            <tr>
            <td>'.$row['university_name_'].'</td>
            <td><a href="university_info.php?data='.$row['rank_'].'">'.$row['rank_'].'</a></td>
            <td>'.$row['location_'].'</td>
            </tr>
            </tbody>';
            }
          }else{
            echo '<h2 class=text-danger>Data not found</h2>';
          }
        }

      }

      ?>
    </table>
  </div>





 </div>



</body>

</html>