<?php
require_once("includes/header.php");

$preview = new Preview($con, $userLoggedIn);
echo $preview->createMoviesPreviewVideo();

$containers = new CategoryContainers($con, $userLoggedIn);
echo $containers->showMovieCategories(null);

require_once("includes/footer.php");


?>