<?php

session_start();

$errorArray = [];

$email = $_POST['email'] == "" ? $errorArray['email_error'] = "Email is required" : $_POST['email'];

if (count($errorArray) < 1) {
    $allUsers = scandir("db/users/");
    $userCount = count($allUsers);
    $userObject;

    for ($index = 0; $index < $userCount; ++$index) {
        $currentUser = $allUsers[$index];
        if ($currentUser == $email . '.json') {
            $userObject = json_decode(file_get_contents("db/users/" . $currentUser));

            //TODO send password reset link to email.

            $_SESSION += $_POST;
            // $_SESSION['errorMsg'] = "";
            $_SESSION['successMsg'] = "Password reset link sent to email address.";
            header('Location: forgot.php');

            die();
        }
    }
    $_SESSION += $_POST;
    // $_SESSION['successMsg'] = "";
    $_SESSION['errorMsg'] = "Email address not associated with any account.";
    header('Location: forgot.php');
} else {
    $_SESSION += $errorArray + $_POST;
    header('Location: forgot.php');
}
