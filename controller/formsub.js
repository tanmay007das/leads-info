

 $('#submit').click(function(){
  var cname = $('#cname').val();
  var phone = $('#phn').val();
  var email = $('#email').val();
  var url   = $('#url').val();
  var issue = $('#issue').val();
  var contact = $('#contact').val();
  var convert = $('#convert').val();
  var note = $('#notes').val();


  
    if(cname == ''){
        alert('Company name required');
    }
    else if(url == ''){
        alert('url required');
    }
    else{
        $.ajax({
            url:'controller/submitdata.php',
            type:'post',
            data:{
                cname: cname,
                phone: phone,
                email: email,
                url  : url,
                issue: issue,
                contact: contact,
                convert: convert,
                note   : note
            },
           success: function(response){
               
                $('#resp1').html(response);
                                
           }
        }); 
    }
 });
