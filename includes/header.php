<?php

    include("includes/config.php");
    include("includes/classes/User.php");
    include("includes/classes/Artist.php");
    include("includes/classes/Album.php");
    include("includes/classes/Song.php");
    include("includes/classes/Playlist.php");

    if(isset($_SESSION['userLoggedIn'])){
        $userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
        $username = $userLoggedIn->getUsername();
        echo "<script>userLoggedIn = '$username';</script>";
    }
    else
    {
        header("Location: register.php");
    }

?>

<html>
<head>
	<title>Welcome to Slotify!</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css?version=12.0">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/script.js?v=21.0"></script>
</head>

<body>





<div id="mainContainer">

    <div id="topContainer">
        <?php include("includes/navBarContainer.php");?>

        <div id="mainViewContainer">
            <div id="mainContent">

