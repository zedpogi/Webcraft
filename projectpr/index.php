<?php
  include("database.php");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Webcraft</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/webcraft_logo.png" type="image/x-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
  <header>
    <h1 class="logo-text">Webcraft</h1>
    <img src="images/webcraft_logo.png" alt="" class="logo">
    <a href="#About-Us" class="about">About</a>
  </header>

  <h2 class="slogan">Craft your Dream Web!</h2>
  <h3>Webcraft is a learning tool that teaches you basic Web Development including HTML,CSS and Javascript. </h3>

  <button onclick="document.getElementById('id01').style.display='block'">SIGN UP</button>
  
  <!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">X</span>
  <form class="modal-content" action="index.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="User"><b>Username</b></label>
      <input type="text" placeholder="Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="pswrepeat" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>If you already have an account <a href="#" style="color:darkblue"> Log In</a> Here.</p>
      
      <button type="submit" class="signup" >Sign Up</button>
      
    </div>
  </form>
</div>

 <div id="About-Us">
  <h4 class="about-title">About</h4>
  <h5 class="about-desc">Webcraft is developed to teach<br> students basic programming which focuses on the<br> fundamentals of Web Development.<br>It aims to provide and share knowledge to students <br>who are interested in learning programming. <br>Webcraft is a beginner-friendly and people with <br>no background knowledge on <br>programming could try this web application.
  </h5>
 </div>

</body>
</html>
<?php

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "psw", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username) && empty($password)) {
      echo "<script>alert('Please input a username or password') </script>";
    }
    else {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      echo $username . "<br>";
      echo $password . "<br>";
      echo $hash . "<br>";
      $sql = "INSERT INTO users(username, password)
              VALUES ('$username', '$hash')";
      try {
      mysqli_query($conn, $sql);
      echo "<script>alert('You are now registered') </script>";
      header('location: /projectpr/options/options.php');
      }
      catch(mysqli_sql_exception) {
      echo "<script>alert('Username has been taken')</script>";
      }
    }
  }
?>