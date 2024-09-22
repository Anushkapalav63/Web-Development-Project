<?php
$link = mysqli_connect("localhost", "root", "", "loginpage");
$username = $_POST['username'];
$password = $_POST['password'];
$query = "insert into logindetails values ('$username', '$password')";
$result = mysqli_query($link, $query);
header('Location: checkoutpage.html');
mysqli_close($link);
