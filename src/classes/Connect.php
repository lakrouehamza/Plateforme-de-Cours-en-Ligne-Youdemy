<?php
class Connect{
    private ?PDO $connect;
    public function __construct(){
        try{
        $connect = new  PDO ("mysql:host=localhost;dbname=youdemy",'root',"12345");
        if(!$connect)
                throw new ExceptionConnect("le base de donnee ne existe pas !! ");
        $this->connect= $connect;
        }catch(ExceptionConnect $e){
            die('error connect '.$e->getMessage());
        }
    }
    public function getConnect() :PDO{
        return $this->connect;
    }
    
}
?>