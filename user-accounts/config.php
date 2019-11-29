<?php
	session_start(); // start session
	// connect to database
	$conn = new mysqli("localhost", "root", "Prna.123!", "user-accounts");
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
  // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__))); // path to the root folder
	define ('INCLUDE_PATH', realpath(dirname(__FILE__) . '/includes' )); // Path to includes folder
	define('BASE_URL', 'http://localhost/user-accounts/'); // the home url of the website
?>