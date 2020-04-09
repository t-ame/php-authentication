<?php

print_r($_POST);

/*
        - collect data
        - verify and validate data
        - save data to db
        - return to page with status message
    */

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$designation = $_POST['designation'];
$email = $_POST['email'];
$department = $_POST['department'];
$gender = $_POST['gender'];
$password = $_POST['password'];

$id; //auto generated

$errorArray = [];

if ($first_name == "") {
    $errorArray['first_name'] = "First name is required";
}
if ($last_name == "") {
    $errorArray['last_name'] = "Last name is required";
}
if ($designation == "") {
    $errorArray['designation'] = "Select a designation";
}
if ($email == "") {
    $errorArray['email'] = "Email is required";
}
if ($department == "") {
    $errorArray['department'] = "Select a department";
}
if ($gender == "") {
    $errorArray['gender'] = "Select a gender";
}
if ($password == "") {
    $errorArray['password'] = "Password is required";
}

print_r($errorArray);
