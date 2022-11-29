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

?>