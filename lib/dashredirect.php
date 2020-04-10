<?php


if (isset($_SESSION['Loggedin']) && !empty($_SESSION['Loggedin'])) {
    $role = $_SESSION['role'];

    if ($role == "PATIENT") {
        $redLocation = 'Location: patient.php' ;
    } else if ($role == "STAFF") {
        $redLocation = 'Location: medteam.php' ;
    } else {
        $redLocation = 'Location: admin.php' ;
    }
    header($redLocation);
}