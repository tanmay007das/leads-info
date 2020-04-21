<?php

    

    include('../model/class.php');

    $delete = $_POST['dlt'];
    $delt = new workdata();
    $delt->delete($delete);

?>