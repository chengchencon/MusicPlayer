<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    ob_start();

    session_start();

    $timezone = date_default_timezone_set("Europe/London");

    $con = mysqli_connect("localhost", "root", "", "slotify");

    if(mysqli_connect_errno()){

    echo "Failed to connect: " . mysqli_connect_errno();


    }
?>