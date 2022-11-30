<?php
require("catalog-display.php");
require_once "project-db.php";
$watchListName = null;
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if (!empty($_POST['btnAction'] && $_POST['btnAction']=='CREATE')){
        $watchListName = $_POST['watchList'];
        $sql = "INSERT INTO PersonalWatchList (name) VALUES ('$watchListName')";
        $result = mysqli_query($link, $sql);

        $UserID = $_SESSION["id"];
        $sql2 = "INSERT INTO Owns (UserID, WatchListID) VALUES ('$UserID',(SELECT WatchListID FROM PersonalWatchList ORDER BY WatchListID DESC LIMIT 1))";
        $result2 = mysqli_query($link, $sql2);
        mysqli_close($link);
    }
}
?>



</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        body{background-image: url('background_img.png')};
    </style>
</head>
<!-- Code from header reference-->
<body class="d-flex flex-column min-vh-100">
    <link rel="stylesheet" href="{% static 'polls/style.css' %}">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand nav-link disabled" href="">Movie Database!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="welcome.php">Home <span class="sr-only"></span></a>
            <a class="nav-item nav-link active" href="catalog.php">Movie Catalog</a>
            <a class="nav-item nav-link active" href="watchlist.php">Your Movie List</a>
        </div>
        </div>
    </nav>

    <body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <div>
    <h1 class="my-5">Create a New Watch List! </h1>
        <FORM method="post">
            <h5><b>Watch List Name:</b></h5>
            <P>
        <INPUT TYPE="Text" Size="25" name = "watchList">
        <P>
        <INPUT TYPE="Submit" Value="CREATE" name="btnAction">
        </FORM>
    </div>
    </body>
    <p>
        <a href="logout.php" class="btn btn-danger ml-3" style="position:relative; right:6px;">Sign Out of Your Account</a>
    </p>

    <!-- Code from footer reference-->
    <footer class="mt-auto bg-light text-center text-lg-start">
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-dark" >Movie Cataloging App</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>
