<?php
	//Get values passe from form in login.php file
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	//to prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	//connect to the server and select datadase
	
	mysql_connect("localhost","root","");
	mysql_select_db("samplelogindb");
	
	//Query the database for user
	$result = mysql_query("select * from user where username ='$username' and password ='$password'")
					or die("Filed to query database ".mysql_error());
	$row = mysql_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password ){
			//echo "Login success!!! Welcome ".$row['username'];
			include_once("home.html");
			}
	else
	{
	include_once("login.php");
	}	
?>