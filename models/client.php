<?php
class client{
    public function __construct($lastname=null,$firstname=null,$password=null,$phone=null,$address=null,$dob=null)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->password = $password;
        $this->phone = $phone;
        $this->address = $address;
        $this->dob = $dob;
    }
   public string $lastname; 
   public string $firstname; 
   public string $password; 
   public int $phone; 
   public string $address; 
   public DateTime $dob; 
}
