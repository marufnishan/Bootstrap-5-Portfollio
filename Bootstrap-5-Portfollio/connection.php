<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "portfolio_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname)){

    die("Failed To Connect !");
}