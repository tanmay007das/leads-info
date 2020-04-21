
    $('#submitid').click(function(){
        var idval = $('#idval').val();
        if(idval==""){
            alert("ID Value Required!");
            //$('#msg1').html("Value required!");
        }
        else{
            $.ajax({
                url:'controller/iddatashow.php',
                type:'POST',
                data:{
                    id:idval
                },
                success:function(response){
                    $('#resp1').html(response);
                },

            });
        }
    });