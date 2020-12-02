<?php
require_once("includes/config.php");
require_once("includes/classes/Preview.php");
require_once("includes/classes/CategoryContainers.php");
require_once("includes/classes/Entity.php");
require_once("includes/classes/EntityProvider.php");
require_once("includes/classes/ErrorMessage.php");
require_once("includes/classes/SeasonProvider.php");
require_once("includes/classes/Season.php");
require_once("includes/classes/Video.php");
require_once("includes/classes/VideoProvider.php");
require_once("includes/classes/User.php");

//session_start();
if(!isset($_SESSION["userLoggedIn"])){
    header("Location: login.php");
     }
$userLoggedIn= $_SESSION["userLoggedIn"];


?>



<!DOCTYPE HTML>

<html>
<head>
    <title>Welcome to Sparkle</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css"> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> 
    <script src="https://kit.fontawesome.com/c3544792c4.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    

</head>

<body>

<div class='wrapper'>
<?php
    if(!isset($hideNav)){

        require_once("includes/navBar.php");
    }
?>