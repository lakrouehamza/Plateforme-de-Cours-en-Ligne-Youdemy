<?php 
class Category {
    private ?int $id;
    private ?String $name;
    private ?String $date;
    public function setId($id):void{
        if(is_int($id) && $id>0)
            $this->id =$id;
    }
    public function setName($name):void{
        if(preg_match('/^[a-zA-Z\s]{3,50}',$name))
            $this->name =$name;
    }
    public function setDate($date):void{
        if(preg_match('/^20[0-9]{2}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/',$date))
            $this->date = $date;
    }
    public function getId():int{
        return $this->id;
    }
    public function getName():String{
        return $this->name;
    }
    public function getDate():string{
        return $this->date;
    }
}

?>