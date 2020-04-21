<?php

include('../model/class.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$url = $_POST['url'];
$issues = $_POST['issues'];
$contact = $_POST['contact'];
$convert = $_POST['convert'];
$notes = $_POST['notes'];
$id = $_POST['hdnid'];

$res = "/^[a-zA-Z]+(@)*[a-zA-Z]+(.)+[a-zA-Z]+(.)*[a-zA-Z]+$/";

$phnval = "/[0-9]/";

$result1 = "";

if(!preg_match($res,$email)){
    $shwe = "Not a valid email address";
    echo $shwe;
}
elseif(!preg_match($phnval,$phone)){
    $shwe = "Not a valid phone number";
    echo $shwe;
}
else{
    $update = new workdata();

    $update->update($name,$phone,$email,$url,$issues,$contact,$convert,$notes,$id);
}


?>