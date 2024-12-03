<?php
include 'database.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["signUp"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username) && empty($password)) {
          echo "<script>alert('Please input a username or password') </script>";
        }
        else {
          $hash = password_hash($password, PASSWORD_DEFAULT);
          echo $username . "<br>";
          echo $password . "<br>";
          //echo $hash . "<br>";
          $sql = "INSERT INTO user(username, password) 
          VALUES ('$username', '$hash')";
            try {
            mysqli_query($conn, $sql);
            echo "<script>alert('You are now registered') </script>";
            $sql = "INSERT INTO quiz_data(username) 
            VALUES ('$username')";
            mysqli_query($conn, $sql);
            header('location: /pr/');
            }
            catch(mysqli_sql_exception) {
            echo "<script>alert('Username has been taken')</script>";
            }
          }
        }
    }
?>