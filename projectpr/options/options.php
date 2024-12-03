<?php
include 'C:\xampp\htdocs\projectpr\database.php';
session_start();
if ($_SESSION['username'] === NULL) {
    header('location: /projectpr/');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webcraft</title>
    <link rel="stylesheet" href="options.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
    <script src="anim.js"> </script>
</head>
<body>
    <header>
        <h1 class="logo-text">Webcraft</h1>
        <img src="webcraft_logo.png" alt="" class="logo">
        <form method="post" action="options.php"> 
            <button type="submit" value="logout" name="logout" id="logout">Log Out</button>
        </form>
    </header>
        
    <div class="welcome-page"> 
        <h1>
            <?php
                echo "Welcome " . $_SESSION['username'] . "!";
            ?>
        </h1>
        <img src="business.jpeg" id="imageTransition">
        <h1 id="quote">Hone your skills. Learn and craft your own website.</h1>
    </div>

    <div class="cards">
        <div class="html-card"></div>
        <div class="css-card"></div>
        <div class="js-card"></div>
    </div>
<!-- User Statistics I swear to God -->
    <div class="user-stats">
        <h1>User Dashboard</h1>
        <p> Quiz Progress:</p>
        <?php
        switch($_SESSION["quizCount"]) {
            case 0:
                echo "<progress id='quizcount' value='0' max='100'> 
                </progress>";
                break;
            case 1:
                echo "<progress id='quizcount' value='40' max='100'> 
                </progress>";
                break;

            case 2:
                echo "<progress id='quizcount' value='70' max='100'> 
                </progress>";
                break;

            case 3:
                echo "<progress id='quizcount' value='100' max='100'> 
                </progress>";
                break;

        }
        ?>
        <div class="user-data"> 
            <div class="quiz">
                <h1>Quiz One</h1>
                <p> 
                    <?php
                    if ($_SESSION['quizOne'] === NULL) {
                        echo "Not Started";
                    }
                    else {
                        echo $_SESSION['quizOne'];
                    }
                    ?>
                </p>
            </div>
            <div class="quiz"> 
                <h1>Quiz Two</h1>
                <p> 
                    <?php
                    if ($_SESSION['quizTwo'] === NULL) {
                        echo "Not Started";
                    }
                    else {
                        echo $_SESSION['quizTwo'];
                    }
                    ?>
                </p>

            </div>
            <div class="quiz"> 
                <h1>Quiz Three</h1>
                <p> 
                    <?php
                    if ($_SESSION['quizThree'] === NULL) {
                        echo "Not Started";
                    }
                    else {
                        echo $_SESSION['quizThree'];
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
    <script src="switch.js"> </script>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['logout'])) {
            session_destroy();
            header('location: /pr/');
        }
    }
?>