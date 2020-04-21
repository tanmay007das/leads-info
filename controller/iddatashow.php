<?php

    include('../model/class.php');

    $id = $_POST['id'];

    $idval = "/[0-9]{1,10}/";

    if(!preg_match($idval,$id)){
        $shwe = "Not a valid ID";
        echo $shwe;
    }
    else{
        $showdtaval = new workdata();

        $showdtaval->showdataid($id);
    }

?>