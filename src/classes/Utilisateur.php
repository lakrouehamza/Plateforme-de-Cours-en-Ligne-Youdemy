<?php 
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
    public function setId($id){
        if($id>0 && is_int($id))
            $this->$id;
    }
    public function setName($name){
        if(preg_match('/^[a-zA-Z\s]{3,50}$/',trim($name)))
            $this->name= $name;
    }
    public function setFirstName($firstName){
        if(preg_match('/^[a-ZA-Z]{3,50}$/',trim($firstName)))
            $this->firstName = $firstName;
    }
    public function setEmail($email){
        if(preg_match('/^[a-zA-Z0-9_]{3,10}@gmail\.com$/',trim($email)))
            $this->email =$email;
    }
    public function setPhone($phone){
        if(preg_match('/^ 0[6|7][0-9]{8}/$' ,trim($phone)))
        $this->phone=$phone;
    }
    public function setRole($role){
        if(in_array(trim($role), ['admin', 'teacher', 'student']))
            $this->role = $role;
    }
    public function setPassword($password){
        if(preg_match('/^[0-9a-zA-Z_"\'&#.;:,?$*=+°)[{\]}é~^%!]{8,100}$/', trim($password)))
            $this->password =$password;
    }
    public function setDate($date_incribt){
        if (preg_match('/^20[0-9]{2}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/', trim($date_incribt)))
            $this->date_incribt = $date_incribt;
    }
}
?>