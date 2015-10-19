<?php

// Grab User submitted information
$email = $_POST["user"];
$pass = $_POST["pass"];

// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("voting",$con);

$result = mysql_query("SELECT username, password FROM login WHERE username='$username' and password='$pass'");

$row = mysql_fetch_array($result);

if($row["username"]==$username && $row["password"]==$password)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>