<?php

$server = "sql300.epizy.com";
$username = "epiz_27731947";
$password = "hJifnpe8AZ3qNBU";
$dbname="epiz_27731947_database";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}

?>
