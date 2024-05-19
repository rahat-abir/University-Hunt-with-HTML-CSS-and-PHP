<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student and Staff Information</title>
  <link rel="stylesheet" href="style_signup.css">
</head>
<body>
  <div class="container">
    <p class="heading">Sign Up</p>
    <div id="buttons" class="center">
      <button onclick="showForm('student')">Student</button>
    </div>

    <div id="imageSection" class="center">
      <img src="uhuntforreg1.png" alt="Image">
    </div>

    <div id="studentForm" class="form-section">
      <form action="process.php" method="post">

        <label for="studentName">Student Name:</label>
        <input type="text" name="studentName" placeholder="Enter Student Name" required>

        <label for="collage">Collage:</label>
        <input type="text" name="collage" placeholder="Enter Collage" required>

        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter Email" required>

        <label for="Result">SSC & HSC Result: (sum)</label>
        <input type="text" name="Result" placeholder="Enter Result" required>

        <label for="pass">Password:</label>
        <input type="password" name="pass" placeholder="Enter Password" required>

        <button type="submit" name="submitStudent">Submit</button>
      </form>
    </div>

    <div id="staffForm" class="form-section">
      <form action="process.php" method="post">
        <label for="staffemail">Staff Email:</label>
        <input type="text" name="staffemail" placeholder="Enter Staff ID" required>

        <label for="staffName">Staff Name:</label>
        <input type="text" name="staffName" placeholder="Enter Staff Name" required>

        <label for="responsibility">Responsibility:</label>
        <input type="text" name="responsibility" placeholder="Enter Responsibility" required>

        <label for="universityId">University ID:</label>
        <input type="text" name="universityId" placeholder="Enter University ID" required>

        <label for="pass">Password:</label>
        <input type="password" name="pass" placeholder="Enter Password" required>

        <button type="submit" name="submitStaff">Submit</button>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
