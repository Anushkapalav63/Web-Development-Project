<?php
$link = mysqli_connect("localhost", "root", "", "signuppage");
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$query = "insert into signupdetails values ( '$email', '$username', '$password')";
$result = mysqli_query($link, $query);
header('Location: homepage-profile.html');
mysqli_close($link);
