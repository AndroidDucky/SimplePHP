<?php

//class User

class User{
private $name; //name of user
private $email; //email of user
private $phone; //phone of user
private $subject; //subject of user
private $message; //message of user


//get name
public  function getName(){
    return $this->name;
}

//set name
public function setName($n)
{
    $this->name=$n;
}

//get email
public function getEmail()
{
    return $this->email;
}

//set email
public function setEmail($email)
{
    $this->email=$email;
}

//get phone
public function getPhone()
{
    return $this->phone;
}

//set phone
public function setPhone($phone)
{
    $this->phone=$phone;
}

//get subject
public function getSubject()
{
    return $this->subject;
}

//set subject
public function setSubject($subject)
{
    $this->subject=$subject;
}

//get message
public function getMessage()
{
    return $this->message;
}

//set message
public function setMessage($message)
{
    $this->message=$message;
}

public function SendMessage() {
    echo "<p> Subject: \"".$this->getSubject()."\" <br> Message content: \"".$this->getMessage(). "\"</p>";


}

}
?>