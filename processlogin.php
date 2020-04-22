<?php

session_start();

$errorArray = [];

$email = $_POST['email'] == "" ? $errorArray['email_error'] = "Email is required" : $_POST['email'];
$password = $_POST['password'] == "" ? $errorArray['password_error'] = "Password is required" : $_POST['password'];

if (count($errorArray) < 1) {
    $allUsers = scandir("db/users/");
    $userCount = count($allUsers);
    $userObject;

    for ($index = 0; $index < $userCount; ++$index) {
        $currentUser = $allUsers[$index];
        if ($currentUser == $email . '.json') {
            $userObject = json_decode(file_get_contents("db/users/" . $currentUser));

            if ($userObject->deleted == 'N' && password_verify($password, $userObject->password)) {
                $_SESSION['Loggedin'] = $userObject->id;
                $_SESSION['fullName'] = $userObject->first_name . ' ' . $userObject->last_name;
                $_SESSION['role'] = $userObject->designation;
                $_SESSION['department'] = $userObject->department;
                $_SESSION['date_of_registration'] = $userObject->date_of_registration;
                $_SESSION['date_of_last_login'] = $userObject->date_of_last_login;

                //TODO update date of last login
                //TODO log login activities
                $role = $userObject->designation;

                $redLocation;

                if ($role == "PATIENT") {
                    $redLocation = 'Location: patient.php';
                } else if ($role == "STAFF") {
                    $redLocation = 'Location: medteam.php';
                } else {
                    $redLocation = 'Location: admin.php';
                }
                header($redLocation);
                die();
            }
            break;
        }
    }
    $_SESSION += $_POST;
    $_SESSION['password'] = "";
    $_SESSION['errorMsg'] = "Invalid Email or Password";
    header('Location: login.php');
} else {
    $_SESSION += $errorArray + $_POST;
    $_SESSION['password'] = "";
    header('Location: login.php');
}
