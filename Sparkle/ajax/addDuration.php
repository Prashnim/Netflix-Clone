<?php
require_once("../includes/config.php");

//echo "hello";

if(isset($_POST["videoId"]) && isset($_POST["username"])){
    $query=$con->prepare("SELECT * from videoprogress where username=:username and videoId=:videoId");
    $query->bindValue(":username", $_POST["username"]);
    $query->bindValue(":videoId", $_POST["videoId"]);
    $query->execute();
    if($query->rowCount()==0){
        //echo "hello";
        $query=$con->prepare("INSERT into videoprogress (username,videoID) values (:username,:videoId)");
        $query->bindValue(":username", $_POST["username"]);
    $query->bindValue(":videoId", $_POST["videoId"]);
    $query->execute();
    }

}
else{
    echo "No video Id or username has been passed into the file";
}
?>