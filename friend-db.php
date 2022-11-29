<?php
function addFriend($name, $major, $year)
{
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

	catch (PDOException $e)
	{
		echo $e->getMessage();
		//if (primary)
		//	echo "general message";
	}

	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function getAllFriends()
{
	global $db;
	$query = "SELECT * FROM friends";
	$statement = $db->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll(); // fetch() retrieves only one row
	$statement->closeCursor();
	return $result;
}

function getFriendByName($name)
{
	global $db;
	$query = "SELECT * FROM friends WHERE name = :name";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name);
	$statement->execute();
	$result = $statement->fetch();
	$statement->closeCursor();
	return $result;
}

function updateFriend($name, $major, $year)
{
	global $db;
	$query = "UPDATE friends SET major=:major, year=:year WHERE name=:name";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name);
	$statement->bindValue(':major', $major);
	$statement->bindValue(':year', $year);
	$statement->execute();
	$statement->closeCursor();
}

function deleteFriend($name)
{
	global $db;
	$query = "DELETE FROM friends WHERE name=:name";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name);
	$statement->execute();
	$statement->closeCursor();
}
?>