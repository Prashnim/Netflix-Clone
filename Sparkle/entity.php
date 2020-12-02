<?php
require_once("includes/header.php");

if(!isset($_GET["id"])) {
    ErrorMessage::show("ERROR: PAGE NOT FOUND");
}
$entityId = $_GET["id"];
$entity = new Entity($con, $entityId);

$preview = new Preview($con, $userLoggedIn);
echo $preview->createPreviewVideo($entity);

$seasonProvider = new SeasonProvider($con, $userLoggedIn);
echo $seasonProvider->create($entity);

$categoryContainers = new CategoryContainers($con, $userLoggedIn);
echo $categoryContainers->showCategory($entity->getCategoryId(),"You might also like");

require_once("includes/footer.php");

?>

