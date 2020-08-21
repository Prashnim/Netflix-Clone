<?php

class Entity{
    private $con,$data;
    public function __construct($con,$input){
        $this->con=$con;
        //$this->input=$input;
        if(is_array($input)){
        $this->data=$input;
        }
        else {
        $query=$this->con->prepare("SELECT * FROM entities whete id=:id");
        $query->bindValue(":id",$input);
        $query->execute();

        $this->data=$query->fetch(PDO::FETCH_ASSOC);
        }
    }
    
    public function getID(){
        return $this->data["id"];
    }
    public function getName(){
        return $this->data["name"];
    }
    public function getThumbnail(){
        return $this->data["thumbnail"];
    }
    public function getPreview(){
        return $this->data["preview"];
    }

}

?>