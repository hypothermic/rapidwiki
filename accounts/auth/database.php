<?php

/* CREATE TABLE users(id INT PRIMARY KEY NOT NULL, email CHAR(64) NOT NULL, password CHAR(128) NOT NULL); */

try {
	$conn = new PDO('sqlite:../database.sql');
} catch (PDOException $e) {
	die("Connection failed: " . $e->getMessage());
}