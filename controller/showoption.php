<?php

$option = $_POST['cont'];


if($option == "Not Contacted"){
    $optval="<option>Not Converted</option>";
    echo $optval;
}
else{
    $optval ="<option>Converted</option>";
    $optval .="<option>Not Converted</option>";
    echo $optval;
}







?>