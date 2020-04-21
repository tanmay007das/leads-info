$('#submit').click(function(){
    var cname = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    var url = $('#url').val();
    var issues = $('#issues').val();
    var contact = $('#contact').val();
    var convert = $('#convert').val();
    var notes = $('#notes').val();
    var hdnid = $('#hdnid').val();

    if(cname == ''){
        alert('Company name required');
    }
    else if(url == ''){
        alert('url required');
    }
    else{
    $.ajax({
        url:'../controller/updatedata.php',
        type:'POST',
        data:{
            name:cname,
            phone:phone,
            email:email,
            url:url,
            issues:issues,
            contact:contact,
            convert:convert,
            notes:notes,
            hdnid:hdnid
        },
        success: function(response){
               
            //$('#resp1').html(response);
            alert(response);
       
       }
    });
   }
 });