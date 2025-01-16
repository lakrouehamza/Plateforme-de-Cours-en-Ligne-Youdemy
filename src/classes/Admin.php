<?php
require_once("Category.php");   
class Admin extends User {
    public function createCategory($category){
        if($category instanceof Category){
            $connect = new Connect();
            $name =  $category->getName();
            $stmt =  $connect->getConnect()->prepare("insert into  category (name) values(:name);");
            $stmt->bindParam(":name",$name,PDO::PARAM_STR);
        }
    }
}

?>