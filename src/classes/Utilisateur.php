<?php 
require('Connect.php');
class Utilisateur {
    protected  ?int $id;
    protected  ?String $name;
    protected  ?String $firstName;
    protected  ?String $email;
    protected  ?String $phone;
    protected  ?String $role;
    protected  ?String $password;
    protected  ?String $date_incribt; 
    public  function __construct(){

    }
    public function setId($id):void{
        if($id>0 && is_int($id))
            $this->$id;
    }
    public function setName($name):void{
        if(preg_match('/^[a-zA-Z\s]{3,50}$/',trim($name)))
            $this->name= $name;
    }
    public function setFirstName($firstName):void{
        if(preg_match('/^[a-ZA-Z]{3,50}$/',trim($firstName)))
            $this->firstName = $firstName;
    }
    public function setEmail($email):void{
        if(preg_match('/^[a-zA-Z0-9_]{3,10}@gmail\.com$/',trim($email)))
            $this->email =$email;
    }
    public function setPhone($phone):void{
        if(preg_match('/^ 0[6|7][0-9]{8}/$' ,trim($phone)))
        $this->phone=$phone;
    }
    public function setRole($role):void{
        if(in_array(trim($role), ['admin', 'teacher', 'student']))
            $this->role = $role;
    }
    public function setPassword($password):void{
        if(preg_match('/^[0-9a-zA-Z_"\'&#.;:,?$*=+°)[{\]}é~^%!]{8,100}$/', trim($password)))
            $this->password =$password;
    }
    public function setDate($date_incribt):void{
        if (preg_match('/^20[0-9]{2}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/', trim($date_incribt)))
            $this->date_incribt = $date_incribt;
    }
    public function getId():int{
        return $this->id;
    }
    public function getName():String{
        return $this->name;
    }
    public function getFirstName():String{
        return $this->firstName;
    }
    public function getEmail():String{
        return $this->email;
    }
    public function getPhone():String{
        return $this->phone;
    }
    public function getRole():String{
        return $this->role;
    }
    public function getPassword():String{
        return $this->password;
    }
    public function getDate():String{
        return $this->date_incribt;
    }
    public function setSession(){
        session_start();
        $_SESSION['id']=$this->getId();
        $_SESSION['role']=$this->getRole();
    }
    public function rempil(){
        $connect =  new Connect ();
        $id = $this->getId();
        $stmt =  $connect->getConnect()->prepare("select *  from  utilisateur where id=:id");
        $stmt->bindParam(":id",$id);
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $this->setName($row ['name']);
            $this->setFirstName($row ['firstname']);
            $this->setEmail($row ['email']);
            $this->setPassword($row ['password']);
            $this->setPhone($row ['phone']);
            $this->setRole($row ['role']);
        }
    }
    public function login(){
        $connect = new Connect();
        
    }
}
?>