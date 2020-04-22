<?php

function userLoggedIn()
{
    return (isset($_SESSION['Loggedin']) && !empty($_SESSION['Loggedin']));
}
