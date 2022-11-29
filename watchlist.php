<?php
require_once "project-db.php";
require("catalog-display.php");
session_start();
$UserID = $_SESSION["id"];
$sql = "SELECT WatchListID FROM owns WHERE UserID = $UserID";
$result = mysqli_query($link, $sql);
$sql2 = "SELECT MovieName FROM IsIn WHERE WatchListID = (mysqli_fetch_row($result)[0])";
$result2 = mysqli_query($link, $sql2);
$list_of_movies = mysqli_fetch_all($result2, MYSQLI_ASSOC);
mysqli_free_result($result2);
// Close connection
mysqli_close($link);
?>

<h3>List of Your Movies</h3>
<div class="row justify-content-center">
<table class="w3-table w3-bordered w3-card-4 center" style="width:70%">
  <thead>
  <tr style="background-color:#B0B0B0">
    <th width="30%">Movie Name</th>
    <th width="30%">Release Date</th>
    <th width="30%">Genre</th>
  </tr>
  </thead>
<?php foreach ($list_of_movies as $movie_info): ?>
  <tr>
     <td><?php echo $movie_info['name']; ?></td>
     <td><?php echo $movie_info['Release_Date']; ?></td>
     <td><?php echo $movie_info['Genre']; ?></td>
  </tr>
<?php endforeach; ?>
</table>
</div>