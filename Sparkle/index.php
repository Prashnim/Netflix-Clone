<?php
require_once("includes/header.php");

$preview = new Preview($con, $userLoggedIn);
echo $preview->createPreviewVideo(null);

$containers = new CategoryContainers($con, $userLoggedIn);
echo $containers->showAllCategories(null);

require_once("includes/footer.php");


?>