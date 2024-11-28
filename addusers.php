<?php
include_once("connection.php");
array_map("htmlspecialchars", array: $_POST);
print_r($_POST);


$stmt = $conn->prepare("INSERT INTO tblsubject (userID,gender,surname,forename,password,house,year ,role)
VALUES (null,:gender,:surname,:forename,:password,:house,:year,:role)");

$stmt->bindParam(':forename', $_POST["forename"]);
$stmt->bindParam(':surname', $_POST["surname"]);
$stmt->bindParam(':house', $_POST["house"]);
$stmt->bindParam(':year', $_POST["year"]);
$stmt->bindParam(':password', $_POST["passwd"]);
$stmt->bindParam(':gender', $_POST["gender"]);
$stmt->bindParam(':role', $role);
$stmt->execute();
$conn=null;


?>