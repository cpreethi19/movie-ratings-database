<?php
require("project-db.php");
// include("connect-db.php");
$user_to_update = $_GET['user_id'];
$sql = "SELECT Name, Birthday, username FROM users WHERE UserID = ?";
$stmt = mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt, "s", $param_ID);
$param_ID = $user_to_update;
if(mysqli_stmt_execute($stmt)){
  mysqli_stmt_store_result($stmt);
  mysqli_stmt_bind_result($stmt, $name, $birthday, $username);
  mysqli_stmt_fetch($stmt);
}
else{
  echo "ERROR: Could not execute lead actors statement: $sql. " . mysqli_error($link);
}
?>

<?php 
if ($_SERVER['REQUEST_METHOD']=='POST')
{
  if (!empty($_POST['btnAction'] && $_POST['btnAction']=='Confirm Update'))
  {
    $sql = "UPDATE users SET Name=?, Birthday=?, username=? WHERE UserID=?";
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssss", $param_Name, $param_Birthday, $param_username, $param_ID);

        // Set parameters
        $param_Name = $_POST['name'];
        $param_Birthday = $_POST['birthday'];
        $param_username = $_POST['username'];
        $param_ID = $user_to_update;

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Redirect to the welcome page
            header("location: welcome.php");
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
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

<div class="container">
  <h1>Your Account Info</h1>  

<form name="mainForm" action="update.php" method="post">   
  <div class="row mb-3 mx-3">
    Name:
    <input type="text" class="form-control" name="name" required value="<?php if(!empty($name)) echo $name; ?>"/>            
  </div>  
  <div class="row mb-3 mx-3">
    Username:
    <input type="text" class="form-control" name="username" required value="<?php if(!empty($username)) echo $username; ?>"/>            
  </div> 
  <div class="row mb-3 mx-3">
    Birthday:
    <input type="text" class="form-control" name="birthday" required value="<?php if(!empty($birthday)) echo $birthday; ?>"/>            
  </div>   
  <!-- <div class="row mb-3 mx-3">     -->
  <div>
    <input type="submit" value="Confirm Update" name="btnAction" class="btn btn-primary" 
           title="Update this user" />            
  </div>  

</form>     


</div> 




  <!-- CDN for JS bootstrap -->
  <!-- you may also use JS bootstrap to make the page dynamic -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  
  <!-- for local -->
  <!-- <script src="your-js-file.js"></script> -->  
  
</div> 
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