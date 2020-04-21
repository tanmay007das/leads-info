<?php
include('../model/class.php');

$cname = $_POST['cname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$url   = $_POST['url'];
$issue = $_POST['issue'];
$contact= $_POST['contact'];
$convert= $_POST['convert'];
$note = $_POST['note'];

$res = "/^[a-zA-Z]+(@)*[a-zA-Z]+(.)+[a-zA-Z]+(.)*[a-zA-Z]+$/";

$phnval = "/[0-9]{2,10}/";

$urlchk = "/^[a-zA-Z0-9]+(.)*[a-zA-Z0-9]+(.)*[a-zA-Z]+$/";

$result1 = "";

if(!preg_match($res,$email)){
    $showdta = new workdata();
    $showdta->showforemail();
}
elseif(!preg_match($phnval,$phone)){
    $showdta = new workdata();
    $showdta->showphno();
}
elseif(!preg_match($urlchk,$url)){
    $showdta = new workdata();
    $showdta->showurl();
}
else{
    $insrt = new workdata();
    $insrt->insert($cname,$phone,$email,$url,$issue,$contact,$convert,$note);
    
}

?>
