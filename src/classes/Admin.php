<?php
require_once("Category.php");   
require_once("User.php"); 
require_once("Tages.php");  
class Admin extends User {
    public function createCategory($category){
        if($category instanceof Category){
            $connect = new Connect();
            $name =  $category->getName();
            $stmt =  $connect->getConnect()->prepare("insert into  category (name) values(:name);");
            $stmt->bindParam(":name",$name,PDO::PARAM_STR);
        }
    }
    public function createTages($tages){
        if($tages instanceof Tages){
            $connect =  new Connect();
            $name =  $tages->getName();
            $stmt =  $connect->getConnect()->prepare("insert into  tages (name) values(:name);");
            $stmt->bindParam(":name",$name,PDO::PARAM_STR);
        }
    }
}

?>