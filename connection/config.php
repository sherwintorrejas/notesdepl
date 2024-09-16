<?php
// Use environment variables for the database connection details
define('DB_SERVER', getenv('DB_HOST'));        // Hostname of the database server
define('DB_USERNAME', getenv('DB_USER'));      // Database username
define('DB_PASSWORD', getenv('DB_PASS'));      // Database password
define('DB_NAME', getenv('DB_NAME'));          // Database name

// Connect to the database using the environment variables
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
