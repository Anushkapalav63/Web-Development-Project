<?php
$link = mysqli_connect("localhost", "root", "", "checkoutpage");
$nameoncard = $_POST['nameoncard'];
$cardnumber = $_POST['cardnumber'];
$expirationdate = $_POST['expirationdate'];
$cvc = $_POST['cvc'];
$query = "insert into checkoutdetails values ('$nameoncard', '$cardnumber', '$expirationdate', '$cvc')";
$result = mysqli_query($link, $query);
header('Location: checkoutpage.html');
mysqli_close($link);
