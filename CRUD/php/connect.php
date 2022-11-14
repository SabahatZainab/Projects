<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "personal projects";

$connections = mysqli_connect($server,$username,$password,$db);

if(!$connections){
    die("Sorry We failed to connect". mysqli_connect_error());
}

?>