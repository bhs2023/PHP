<?php
class Member
{
    public $userid;
    public $username;
    public $password;
    public $email;
    
    public function __constructor($userid="", $username="", $password="", $email="")
    {
        $this->userid = userid;
        $this->username = username;
        $this->password = $password;
        $this->email = $email;
    }
}

class MemberManager
{
    
}


?>

