<?php
include_once("lib/dashboardheader.php");
if ($_SESSION['role'] != "ADMIN") {
    $_SESSION['errorMsg'] = "Access Denied!";
    header('Location: login.php');
}
?>


<button><a href="newuser.php">Add New User</a></button>


<?php include_once("lib/dashboardfooter.php"); ?>