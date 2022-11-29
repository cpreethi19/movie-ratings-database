<?php
require_once "project-db.php";
$movie_name = $_GET['movie_name'];
?>

<?php 
$name = $gender = $birthday = "";
$name_err = $gender_err = $birthday_err = "";

if ($_SERVER['REQUEST_METHOD']=='POST')
{
  if(empty(trim($_POST["name"]))){
        $name_err = "Please enter the actor name.";
    } else{
        $name = trim($_POST["name"]);
    }
  if(empty(trim($_POST["gender"]))){
        $gender_err = "Please enter the actor gender.";
    } else{
        $gender = trim($_POST["gender"]);
    }
  if(empty(trim($_POST["birthday"]))){
        $birthday_err = "Please enter the actor birthday.";
    } else{
        $birthday = trim($_POST["birthday"]);
    }

  if (!empty($_POST['btnAction'] && $_POST['btnAction']=='Add') && empty($name_err) && empty($gender_err) && empty($birthday_err))
  {
    //addFriend($_POST['name'], $_POST['major'], $_POST['year']);
    $sql = "INSERT INTO Actor (Name, Gender, Birthday VALUES (?, ?, ?)";
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sss", $param_Name, $param_Gender, $param_Birthday);

        // Set parameters
        $param_Name = $name;
        $param_Gender = $gender;
        $param_Birthday = $birthday;
        $movie = $_POST['movie_to_update'];

        if(mysqli_stmt_execute($stmt)){
          // Update display table

        } else{
            echo "Oops! Something went wrong with this account. Please try again later.";
        }
        mysqli_stmt_close($stmt);
    }
  //mysqli_close($link);
  }
}
?>

<!-- 1. create HTML5 doctype -->
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

</head>

<h1><?php echo $movie_name; ?></h1>
<div class="row justify-content-center"> 
</div> 
<?php
$sql_director = "SELECT Director FROM Films WHERE MovieName = ?";
$stmt_director = mysqli_prepare($link, $sql_director);
mysqli_stmt_bind_param($stmt_director, "s", $param_name);
$param_name = $movie_name;
mysqli_stmt_execute($stmt_director);
mysqli_stmt_store_result($stmt_director);
mysqli_stmt_bind_result($stmt_director, $director_name);
mysqli_stmt_fetch($stmt_director);

$sql_director_info = "SELECT Gender, Birthday FROM Director WHERE Name = ?";
$stmt_dir_info = mysqli_prepare($link, $sql_director_info);
mysqli_stmt_bind_param($stmt_dir_info, "s", $param_name);
$param_name = $director_name;
mysqli_stmt_execute($stmt_dir_info);
mysqli_stmt_store_result($stmt_dir_info);
mysqli_stmt_bind_result($stmt_dir_info, $director_gender, $director_birthday);
mysqli_stmt_fetch($stmt_dir_info);

$sql_producer = "SELECT StudioName FROM Produces WHERE MovieName = ?";
$stmt_producer = mysqli_prepare($link, $sql_producer);
mysqli_stmt_bind_param($stmt_producer, "s", $param_name);
$param_name = $movie_name;
mysqli_stmt_execute($stmt_producer);
mysqli_stmt_store_result($stmt_producer);
mysqli_stmt_bind_result($stmt_producer, $studio_name);
mysqli_stmt_fetch($stmt_producer);

$sql_studio = "SELECT Address FROM studio WHERE StudioName = ?";
$stmt_studio = mysqli_prepare($link, $sql_studio);
mysqli_stmt_bind_param($stmt_studio, "s", $param_name);
$param_name = $studio_name;
mysqli_stmt_execute($stmt_studio);
mysqli_stmt_store_result($stmt_studio);
mysqli_stmt_bind_result($stmt_studio, $studio_address);
mysqli_stmt_fetch($stmt_studio);

?> 
<h3 align="left">Director Information</h3>
<h6 align="left">Name: <?php echo $director_name; ?></h6>
<h6 align="left">Gender: <?php echo $director_gender; ?></h6>
<h6 align="left">Birthday: <?php echo $director_birthday; ?></h6>

<h3 align="left">Producer Information</h3>
<h6 align="left">Studio Name: <?php echo $studio_name; ?></h6>
<h6 align="left">Studio Address: <?php echo $studio_address; ?></h6>

<h3 align="left">Lead Actors' Information</h3>
<?php
// Attempt select query execution
$sql = "SELECT * FROM StarsIn S JOIN Actor A WHERE S.ActorName = A.Name AND S.MovieName = '$movie_name'";
if(empty($_POST['btnAction']) && $result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Gender</th>";
                echo "<th>Birthday</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Gender'] . "</td>";
                echo "<td>" . $row['Birthday'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not execute lead actors statement: $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<h5>Add Actor</h5>
<form name="mainForm" action="movie-data.php" method="post">   
  <div class="row mb-3 mx-3">
    Name:
    <input type="text" class="form-control" name="name"/>            
  </div>  
  <div class="row mb-3 mx-3">
    Gender:
    <input type="text" class="form-control" name="gender"/>            
  </div> 
  <div class="row mb-3 mx-3">
    Birthday:
    <input type="text" class="form-control" name="birthday"/>            
  </div>   
  <!-- <div class="row mb-3 mx-3">     -->
  <div>
    <input type="submit" value="Add" name="btnAction" class="btn btn-dark" 
           title="Insert an actor into the actor table" />         
  </div> 
  <input type="hidden" name="movie_to_update" value="<?php echo $movie_name; ?>"/> 

</form>   


</body>
</html>
