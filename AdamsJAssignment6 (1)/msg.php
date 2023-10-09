<?php
session_start();
if(isset($_SESSION['user']) && $_SESSION['user'])
{
require_once 'User.php'; //include your class file
$s=unserialize($_SESSION['user']); //unserialize the object sent
echo $s->setName($_POST['username']);
echo $s->setEmail($_POST['email']);
echo $s->setPhone($_POST['phone']);
echo $s->setSubject($_POST['Subject']);
echo $s->setMessage($_POST['Message']);


echo $s->SendMessage(); //access functions in the class
}
?>