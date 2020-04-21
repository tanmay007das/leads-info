function loaddata(){
    $.ajax({
        url:'controller/showdata.php',
        type:'post',
        
       success: function(response){
        $('#resp1').html(response);
       
       }
    }); 
}

loaddata();