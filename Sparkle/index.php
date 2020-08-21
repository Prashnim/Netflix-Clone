<?php
require_once("includes/header.php");

$preview = new Preview($con, $userLoggedIn);
echo $preview->createPreviewVideo(null);

    
?>