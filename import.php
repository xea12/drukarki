<?php
#Include the connect.php file
include ('connect.php');
$con = mysqli_connect($hostname, $username, $password);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Create database

$sql = "CREATE DATABASE IF NOT EXISTS ". $database ;
if ($con->query($sql) === false) {
	echo "Somthing wrong with DB!";

}
$con->close();
$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS mytable (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
rodzaj VARCHAR(50),
model VARCHAR(80) NOT NULL UNIQUE,
uwagi VARCHAR(100),
wifi VARCHAR(3),
lan VARCHAR(3),
fax VARCHAR(3),
nfc VARCHAR(3),
adf VARCHAR(3),
duplex VARCHAR(3),
skan_dwustr VARCHAR(3),
a3 VARCHAR(3),
cena_drukarki FLOAT
)";

if ($conn->query($sql) === false) {
	echo "Somthing wrong with TAB!";
}

$csvFilePath = "test.csv";
$file = fopen($csvFilePath, "r");
while (($row = fgetcsv($file, 10000, ";")) !== FALSE) {
	$stmt = $conn->prepare(" INSERT IGNORE INTO mytable (rodzaj, model, uwagi, wifi, lan, fax, nfc, adf, duplex, skan_dwustr, a3, cena_drukarki) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11]);
    $stmt->execute();
}
fclose($file);
$conn->close();
?>