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
    <input type="text" placeholder="Search Universities" name="search">
    <button type="submit" name="submit"><img src="search.png"></button>
  </form>


  <div class="container my-5">
    <table class="table">
      <?php
      if(isset($_POST['submit'])){
        $search=$_POST['search'];

        $sql="Select * from 'university_info' where id='$search'";
        $result=mysqli_query($con,$sql);
      }

      ?>
    </table>
  </div>





 </div>



</body>

</html>