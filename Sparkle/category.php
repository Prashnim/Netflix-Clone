<?php
require_once("includes/header.php");

if(!isset($_GET["id"])){
    ErrorMessage::show("No ID passed into the page");
}

$preview = new Preview($con, $userLoggedIn);
echo $preview->createCategoryPreviewVideo($_GET["id"]);

$containers = new CategoryContainers($con, $userLoggedIn);
echo $containers->showCategory($_GET["id"]);

require_once("includes/footer.php");


?>