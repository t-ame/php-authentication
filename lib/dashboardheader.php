<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth App | Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body> 
<?php
include_once("lib/header.php");

if (!isset($_SESSION['Loggedin'])) {
    header('Location: login.php');
}
?>

<h2>Dashboard</h2>
<hr>
<p>
    <span class="float_right"><i>Last login: <?php echo $_SESSION['date_of_last_login'] ?> </i></span> <br>
    <span class="float_left"> Role: <?php echo $_SESSION['role'] ?> </span> <br>
    <span class="float_left"> Department: <?php echo $_SESSION['department'] ?> </span> <br>
    <span class="float_left"> Date of Registration: <?php echo $_SESSION['date_of_registration'] ?> </span> <br>
</p>
<hr>