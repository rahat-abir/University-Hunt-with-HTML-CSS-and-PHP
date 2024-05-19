<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style_addapprove_university.css" />
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
      <section class="container">
      <form action="#" class="form">
        <div class="input-box">
          <label>Your Email</label>
          <input type="text" placeholder="Enter email" required />
        </div>

        <div class="input-box">
          <label>University Name</label>
          <input type="email" placeholder="Enter university name" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Rank</label>
            <input type="number" placeholder="Enter rank" required />
          </div>
          <div class="input-box">
            <label>Vice-chancellor</label>
            <input type="text" placeholder="Enter Vice-chancellor Name" required />
          </div>
        </div>

        <div class="column">
          <div class="input-box">
            <label>Facultys</label>
            <input type="text" placeholder="Enter faculties seperated by ','" required />
          </div>
          <div class="input-box">
            <label>Tution fee</label>
            <input type="text" placeholder="Enter tution fee" required />
          </div>
        </div>
        <div class="column">
          <div class="input-box">
            <label>Minimum Required GPA</label>
            <input type="number" placeholder="Enter Required GPA" required />
          </div>
          <div class="input-box">
            <label>Extra Facilities</label>
            <input type="text" placeholder="Enter Extra Facilities seperated by ','" required />
          </div>
        </div>
        <div class="input-box">
          <label>University website</label>
          <input type="text" placeholder="Enter university website" required />
        </div>
        
        <button>Submit</button>
      </form>
    </section>



    </div>









  
  </body>
</html>