<?php
require_once("includes/header.php");

$preview = new Preview($con, $userLoggedIn);
echo $preview->createTVShowPreviewVideo();

$containers = new CategoryContainers($con, $userLoggedIn);
echo $containers->showTVShowCategories(null);

require_once("includes/footer.php");


?>