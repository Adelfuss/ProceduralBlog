<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$dbName = "awablog";

$conn = new mysqli($host,$user,$password,$dbName);
if ($conn->connect_errno){
    die("Database connection error: " .$conn->connect_errno);
}