<?php
// membuat koneksi databse

$databaseHost = 'localhost';
$databaseName = 'crud';
$databaseUsername = 'root';
$databasePassword = '';

// koneksi database mysql
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>