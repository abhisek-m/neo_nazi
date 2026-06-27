<?php

$conn = new mysqli("localhost","root","","usersdb");

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$gender = $_POST['gender'];
$dob = $_POST['dob'];

$sql = "INSERT INTO users
(first_name,last_name,email,password,gender,dob)
VALUES
('$fname','$lname','$email','$password','$gender','$dob')";

$conn->query($sql);

header("Location: AFTER LOGIN.HTML");

$conn->close();

?>