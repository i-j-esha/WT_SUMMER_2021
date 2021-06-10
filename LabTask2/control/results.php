<?php
$validatename="";
$validateemail="";
$validatepassword="";
$validateradio="";
$v1=$v2=$v3="";
$name=$email=$gender=$password="";
$validatecheckbox="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];

if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "you must enter name";

}
else
{
    $validatename="Your name is:".$_REQUEST["fname"];
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}

if (empty($password) || strlen($password)<8 || !preg_match("/(?=.*[@#$%^&+=]).*$/",$password))
    {
        $validatepassword ="you must enter valid password";
    } 
    else
    {
        $validatepassword = "Your password is ".$password;
    }

if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
else{
    $validateradio= "......Please select a gender";
}

if(!isset($_REQUEST["hobby1"])&&!isset($_REQUEST["hobby2"])&&!isset($_REQUEST["hobby3"]))
{
    $validatecheckbox = ".......Please select at least one hobby";
    
}
else{
   if(isset($_REQUEST["hobby1"]))
   {
       $v1= $_REQUEST["hobby1"];
   }
   if(isset($_REQUEST["hobby2"]))
   { 
       $v2= $_REQUEST["hobby2"];
   }
   if(isset($_REQUEST["hobby3"]))
   {
    $v3= $_REQUEST["hobby3"];
   }
}
}


?>