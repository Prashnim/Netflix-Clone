<?php

class VideoProvider{

    public static function getUpNext($con,$currentVideo){
        $query=$con->prepare("SELECT * from videos where entityId=:entityId and id!=:videoId
         and ((season=:season and episode>:episode) or season>:season) 
         
         ORDER BY season, episode asc limit 1");

         $query->bindValue(":entityId",$currentVideo->getEntityId());
         $query->bindValue(":season",$currentVideo->getSeasonNumber());
         $query->bindValue(":episode",$currentVideo->getEpisodeNumber());
         $query->bindValue(":videoId",$currentVideo->getId());

         $query->execute();

         if($query->rowCount()==0){
             $query=$con->prepare("SELECT * from videos where season<=1 and episode<=1
             and id!=:videoId order by views desc limit 1");
              $query->bindValue(":videoId",$currentVideo->getId());
              $query->execute();
         }

         $row=$query->fetch(PDO::FETCH_ASSOC);
         return new Video($con, $row);
    }

    public static function getEntityVideoForUser($con, $entityId, $username) {
        $query = $con->prepare("SELECT videoId FROM `videoProgress` 
                                INNER JOIN videos
                                ON videoprogress.videoId = videos.id
                                WHERE videos.entityId = :entityId 
                                AND videoprogress.username = :username
                                ORDER BY videoprogress.dateModified DESC
                                LIMIT 1");
        $query->bindValue(":entityId", $entityId);
        $query->bindValue(":username", $username);
        $query->execute();

        if($query->rowCount() == 0) {
            $query = $con->prepare("SELECT id FROM videos 
                                    WHERE entityId=:entityId
                                    ORDER BY season, episode ASC LIMIT 1");
            $query->bindValue(":entityId", $entityId);
            $query->execute();
        }

        return $query->fetchColumn();
    }


}

?>