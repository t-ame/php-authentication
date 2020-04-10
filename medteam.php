<?php
include_once("lib/dashboardheader.php");
if ($_SESSION['role'] != "STAFF") {
    $_SESSION['errorMsg'] = "Access Denied!";
    header('Location: login.php');
}
?>





<?php include_once("lib/dashboardfooter.php"); ?>