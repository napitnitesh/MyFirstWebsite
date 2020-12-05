<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}

	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
        require_once('config.php');

		$id = $_GET['id'];
		mysqli_query($conn, "DELETE FROM list WHERE id='$id'");
		header("location: home.php");
	}
?>