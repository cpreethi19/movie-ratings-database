<?php
function addPersonalWatchList($Movie) {
	global $link;
	$sql = "INSERT INTO PersonalWatchList VALUES ($Movie)";
	$result = mysqli_query($link, $sql);
	mysqli_close($link);
}

function addPersonalWatchListOwns($UserID) {
	global $link;
	$sql2 = "SELECT AUTO_INCREMENT FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = pkc7dbu_b AND TABLE_NAME = PersonalWatchList";
	$result = mysqli_query($link, $sql2);
	$sql = "INSERT INTO Owns VALUES ($UserID, mysqli_fetch_row($result)[0])";
	$result2 = mysqli_query($link, $sql);
	mysqli_close($link);
}

?>