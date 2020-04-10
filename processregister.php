<?php

session_start();

/*
        - collect data
        - verify and validate data
        - save data to db
        - return to page with status message
    */

$errorArray = [];

$first_name = $_POST['first_name'] == "" ? $errorArray['first_name_error'] = "First name is required" : $_POST['first_name'];
$last_name = $_POST['last_name'] == "" ? $errorArray['last_name_error'] = "Last name is required" : $_POST['last_name'];
$designation = $_POST['designation'] == "" ? $errorArray['designation_error'] = "Select a designation" : $_POST['designation'];
$email = $_POST['email'] == "" ? $errorArray['email_error'] = "Email is required" : $_POST['email'];
$department = $_POST['department'] == "" ? $errorArray['department_error'] = "Select a department" : $_POST['department'];
$gender = $_POST['gender'] == "" ? $errorArray['gender_error'] = "Select a gender" : $_POST['gender'];
$password = $_POST['password'] == "" ? $errorArray['password_error'] = "Password is required" : $_POST['password'];

$arrayLength = count($errorArray);

if ($arrayLength < 1) {
    $allUsers = scandir("db/users/");
    $userCount = count($allUsers);
    $userExists = false;

    for ($index = 0; $index < $userCount; ++$index) {
        if ($allUsers[$index] == $email . '.json') {
            $userExists = true;
            break;
        }
    }

    if (!$userExists) {

        $id = --$userCount;
        $currentTime = '';

        $userObject = [
            'id' => $id,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'designation' => $designation,
            'email' => $email,
            'department' => $department,
            'gender' => $gender,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'date_of_registration' => $currentTime,
            'date_of_last_login' => "This is your first login",
            'deleted' => 'N'
        ];

        file_put_contents('db/users/' . $email . '.json', json_encode($userObject));

        $_SESSION['successMsg'] = "Registration successful. You can now log in";
        header('Location: login.php');
    } else {
        $_SESSION += $_POST;
        $_SESSION['password'] = "";
        $_SESSION['errorMsg'] = "An account already exists for this email. Proceed to the Login page.";
        header('Location: register.php');
    }
} else {
    $_SESSION += $errorArray + $_POST;
    $_SESSION['password'] = "";
    header('Location: register.php');
}
