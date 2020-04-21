function dlt(dl){
    var dlt = dl;

    
    var r = confirm("Do you really want to delete record?");
    if(r == true){
        $.ajax({
            url:'controller/delete.php',
            type:'post',
            data:{
                dlt:dlt
            },        
           success: function(response){
             $('#resp1').html(response);
            //alert(response);
           }
        });
    }
    
}