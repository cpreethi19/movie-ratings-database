<?php
function getAllMovies()
{
	global $link;

	$query = "SELECT * FROM Movie";
	$stmt = mysqli_prepare($link, $query);
	mysqli_stmt_execute($stmt);
	$result = $stmt->get_result();
	$return = $result->mysqli_fetch_all(MTSQLI_ASSOC); // fetch() retrieves only one row
	mysqli_stmt_close($stmt);
	return $return;
}

function addMovie() {

}
function addPersonalWatchList($UserID, $Movie) {
	$sql = "SELECT name, Release_Date, Genre FROM Movie";
	$result = mysqli_query($link, $sql);
	$list_of_movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_free_result($result);
	// Close connection
	mysqli_close($link);

	global $db;
	try {
	$query = "INSERT INTO friends VALUES (:name, :major, :year)";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name);
	$statement->bindValue(':major', $major);
	$statement->bindValue(':year', $year);
	$statement->execute();
	$statement->closeCursor();
}

function addPersonalWatchListOwns($UserID) {

}

?>