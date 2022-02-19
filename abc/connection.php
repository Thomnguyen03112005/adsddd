<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "databaselogin";

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect");
}