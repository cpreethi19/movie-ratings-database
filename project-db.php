
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysql01.cs.virginia.edu');
define('DB_USERNAME', 'pkc7dbu');
define('DB_PASSWORD', 'Fall2022');
define('DB_NAME', 'pkc7dbu');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>