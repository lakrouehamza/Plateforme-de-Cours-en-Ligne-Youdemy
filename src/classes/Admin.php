<?php
require_once("Category.php");   
require_once("User.php"); 
require_once("Tags.php");  
class Admin extends User {
    public function createCategory($category){
        if($category instanceof Category){
            $connect = new Connect();
            $name =  $category->getName();
            $image = $category->getImage();
            $desc =  $category->getDesc();
            $stmt =  $connect->getConnect()->prepare("insert into  category (name,description,image) values(:name , :desc , :img);");
            $stmt->bindParam(":name",$name,PDO::PARAM_STR);
            $stmt->bindParam(":desc",$desc,PDO::PARAM_STR);
            $stmt->bindParam(":img",$image,PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    public function createTags($tags){
        if($tags instanceof Tags){
            $connect =  new Connect();
            $name =  $tags->getName();
            $stmt =  $connect->getConnect()->prepare("insert into tags(name) values(:name);");
            $stmt->bindParam(":name",$name,PDO::PARAM_STR);
            $stmt->execute();
        }
    }
    public function getAllTags():PDOStatement{
        $connect =  new Connect ();
        $stmt =  $connect->getConnect()->prepare("select *  from tags");
        $stmt->execute();
        return $stmt;
    }
    public function getAllCategory():PDOStatement{
        $connect = new Connect();
        $stmt =  $connect->getConnect()->prepare("select *  from category");
        $stmt->execute();
        return $stmt;
    }
}

?>