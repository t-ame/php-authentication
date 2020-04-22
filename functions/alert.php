<?php
if (!isset($_SESSION)) {
    session_start();
}

function error($msgName)
{
    echo "<span style='color: red'>" . ($_SESSION[$msgName] ?? "") . "</span>";
}

function success($successName)
{
    echo "<span style='color: green'>" . ($_SESSION[$successName] ?? "") . "</span>";
}

function warning($warnName)
{
    echo "<span style='color: blue'>" . ($_SESSION[$warnName] ?? "") . "</span>";
}
