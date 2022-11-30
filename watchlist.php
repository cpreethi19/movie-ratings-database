<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <!-- 2. include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--
  Bootstrap is designed to be responsive to mobile.
  Mobile-first styles are part of the core framework.

  width=device-width sets the width of the page to follow the screen-width
  initial-scale=1 sets the initial zoom level when the page is first loaded
  -->

  <title>Movie Catalog</title>

  <!-- 3. link bootstrap -->
  <!-- if you choose to use CDN for CSS bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- you may also use W3's formats -->
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

  <!--
  Use a link tag to link an external resource.
  A rel (relationship) specifies relationship between the current document and the linked resource.
  -->

  <!-- If you choose to use a favicon, specify the destination of the resource in href -->
  <link rel="icon" type="image/png" href="http://www.cs.virginia.edu/~up3f/cs4750/images/db-icon.png" />

  <!-- if you choose to download bootstrap and host it locally -->
  <!-- <link rel="stylesheet" href="path-to-your-file/bootstrap.min.css" /> -->

  <!-- include your CSS -->
  <!-- <link rel="stylesheet" href="custom.css" />  -->
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
    <style>
        #search {
            border:5px solid #CCC;
        }
    </style>

</head>
<?php
require_once "project-db.php";
require("catalog-display.php");
session_start();
$UserID = $_SESSION["id"];
$sql = "SELECT MovieName FROM IsIn WHERE WatchListID = (SELECT DISTINCT WatchListID FROM Owns WHERE UserID = '$UserID' LIMIT 1)";
$result = mysqli_query($link, $sql);
$list_of_movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
// Close connection
mysqli_close($link);
?>

<h3>List of Your Movies</h3>
<div class="row justify-content-center">
<table class="w3-table w3-bordered w3-card-4 center" style="width:70%">
  <thead>
  <tr style="background-color:#B0B0B0">
    <th width="30%">Movie Name</th>
  </tr>
  </thead>
<?php $i=0;
 foreach ($list_of_movies as $movie_info):
   $i++;
   $rowcolor=($i%2==0?'#FCEDDA':'#e8a2b299');?>
  <tr style="background-color: <?php echo $rowcolor;?>;">
     <td><a class="nav-item nav-link active" href="movie-data.php?movie_name=<?php echo $movie_info['MovieName'] ?>"><?php echo $movie_info['MovieName']; ?></a></td>
  </tr>
<?php endforeach; ?>
</table>


</div>
</body>
    <!-- Code from footer reference-->
    <footer class="mt-auto bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
            <!--Grid column-->
                <div class="text-center">
                <h5 class="text-uppercase">Movie Database</h5>
                <p>
                    This is our Movie Database!!!
                </p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-dark" >Movie Cataloging App</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
