<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS tblusers;
CREATE TABLE tblusers
(userID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
gender VARCHAR(1) NOT NULL,
surname VARCHAR(20) NOT NULL,
forename VARCHAR(20) NOT NULL,
password VARCHAR(20) NOT NULL,
house VARCHAR(20) NOT NULL,
year INT(2) NOT NULL,
role TINYINT(1))
");

$stmt->execute();
$stmt->closeCursor();
echo("<br>tblusers created")



$stmt = $conn->prepare("DROP TABLE IF EXISTS tblsubjects;
CREATE TABLE tblsubjects
");

$stmt->execute();
$stmt->closeCursor();
echo("<br>tblsubject created")



$stmt = $conn->prepare("DROP TABLE IF EXISTS tblpupilstudies;
CREATE TABLE tblpupilstudies

");

$stmt->execute();
$stmt->closeCursor();
echo("<br>tblpupilstudies created")
?>