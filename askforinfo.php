
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form in HTML CSS</title>
    <link rel="stylesheet" href="style_askforinfoi.css" />
  </head>
  <body>
    <section class="container">
      <header>Request for more information</header>
      <form action="dataentry.php" method="post">
        <div class="input-box">
          <label>Your Email</label>
          <input type="email" placeholder="Enter email" name="email" />
        </div>

        <div class="input-box">
          <label>University Name</label>
          <input type="text" placeholder="Enter university name" name="uname" />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Rank</label>
            <input type="number" placeholder="Enter rank" name="rank" />
          </div>
          <div class="input-box">
            <label>Vice-chancellor</label>
            <input type="text" placeholder="Enter Vice-chancellor Name" name="VC" />
          </div>
        </div>

        <div class="column">
          <div class="input-box">
            <label>Facultys</label>
            <input type="text" placeholder="Enter faculties seperated by ','" name="faculty" />
          </div>
          <div class="input-box">
            <label>Tution fee</label>
            <input type="text" placeholder="Enter tution fee" name="tutionfee" />
          </div>
        </div>
        <div class="column">
          <div class="input-box">
            <label>Minimum Required GPA</label>
            <input type="number" placeholder="Enter Required GPA" name="gpa" />
          </div>
          <div class="input-box">
            <label>Extra Facilities</label>
            <input type="text" placeholder="Enter Extra Facilities seperated by ','" name="facili" />
          </div>
        </div>
        <div class="input-box">
          <label>University website</label>
          <input type="text" placeholder="Enter university website" name="site"/>
        </div>
        
        <button>Submit</button>
      </form>
    </section>
  </body>
</html>

