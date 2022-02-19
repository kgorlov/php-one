<?php

// echo $_POST;
//print_r($_POST);

// $Glent = "INSERT INTO login (name, password, email
//     VALUES ($_POST['name'], $_POST['pass'], $_POST['email'])";
$connection = mysqli_connect('localhost', 'admin', '123', 'abc');
$query =  "INSERT INTO login (name, password, email,date_create)
 VALUES ('$_POST[name]', '$_POST[pass]', '$_POST[email]',NOW());";
$result = mysqli_query($connection, $query);
mysqli_close($connection);