<?php 
class Cours{
    private int $id;
    private String $name ;
    private String $description ;
    public function __construct(){}
    public function __destruct()
    {
        
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name; 
    }
    public function getDesc(){
        return $this->description;
    }
    public function  setId($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name= $name;
    }
    public function setDesc($description){
        $this->description = $description;
    }
    public function rempil(){
        $id =  $this->id;
        $connect =  new Connect();
        $stmt = $connect->getConnect()->prepare("select *  from  cours where id = :id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $this->setId( $row['id']);
            $this->setName($row['name']);
            $this->setDesc($row['description']);
        }
    }
}
?>