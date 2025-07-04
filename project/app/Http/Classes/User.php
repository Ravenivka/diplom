<?php
namespace App\Http\Classes;

class User {
    
    private  $name;
    private  $email;
    private  $password;
    private  $role;
    private  $onDesc;
    private  $adress     ;
    private $phone;

    private $id = null;
    
    public function __construct($userName = "Гость", $userEmail = "", $userPassword = "", $useRole = 0, $userOnDesc = false, $userAddres = "" , $userPhone = "")
		{
      $this->name = $userName;
      $this->email = $userEmail;
      $this->password = $userPassword;
      $this->role = $useRole;
      $this->onDesc = $userOnDesc;
      $this->adress = $userAddres;
      $this->phone = $userPhone;
        
    }

    public function getname()
    {
      return $this->name;
    }
    public function getemail()
    {
      return $this->email;
    }
    public function getpassword()
    {
      return $this->password;
    }
    public function getrole()
    {
      return $this->role;
    }
    public function getonDesc()
    {
      return $this->onDesc;
    }
    public function getadress()
    {
      return $this->adress;
    }
    public function getphone()
    {
      return $this->phone;
    }

    public function getid()
    {
      return $this->id;
    }

    public function setname($value)
    {
      $this->name = $value;
    }
    public function setemail($value)
    {
      $this->email = $value;
    }
    public function setpassword($value)
    {
      $this->password = $value;
    }
    public function setrole($value)
    {
      $this->role = $value;
    }
    public function setonDesc($value)
    {
      $this->onDesc = $value;
    }
    public function setadress($value)
    {
      $this->adress = $value;
    }
    public function setphone($value)
    {
      $this->phone = $value;
    }

    public function setid($value)
    {
      $this->id = $value;
    }

}
?>