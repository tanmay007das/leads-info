
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Leads Information</title>
  </head>
  <body>  
	  
<div class="container mt-5">
  <h2 class="text-center">Leads Information</h2>
  
  <div class="container-fluid">
   <div class="row">
    <div class="col-md-8"></div>  
   <!-- <div class="col-md-4"> <a href="index.php" class="btn btn-info"> Back To Home Page </a> </div> -->
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Save Lead Info.
   </button>
   </div>
  </div>
   <p>Enter ID for details</p>
    <input type="text" name="idval" id="idval">
   <button type="submit" id="submitid" class="btn btn-primary" name="submit" value="Submit">Check Info</button>
   <span id="msg1"></span>
   <br><br><br>
   <div class="container-fluid">
     
      <table class='table table-striped'>
      <thead>
      <tr>
      <th>Id</th>
      <th>Company</th>
      <th class='text-center'>Phone</th>
      <th class='text-center'>Email</th>
      <th class='text-center'>Url</th>
      <th class='text-center'>Issues</th>
      <th class='text-center'>Contacted or Not</th>
      <th class='text-center'>Converted or Not</th>
      <th class='text-center'>Note</th>  
      </tr>
      </thead>
        <tbody id="resp1">      
     
        
        </tbody>
       </table>
    
   </div>   

	 

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Submit leads Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group">
          <label for="">Company Name*</label>
          <input type="text" class="form-control" id="cname" aria-describedby="emailHelp"><br />
        

          <label for="">Phone</label>
          <input type="text" class="form-control"  id="phn" aria-describedby="emailHelp"><br />
        

          <label for="">Email</label>
          <input type="text" class="form-control"  id="email" aria-describedby="emailHelp"><br />

          <label for="">Url*</label>
          <input type="text" class="form-control"  id="url" aria-describedby="emailHelp"><br />

          <label for="">Issues</label>
          <input type="text" class="form-control"  id="issue" aria-describedby="emailHelp"><br />
          
          <label for="">Contacted/Not Contacted</label>
          <select id="contact">
          <option>Contacted</option>
          <option>Not Contacted</option>
          </select>
          <br/>
          
          <label for="">Converted/Not Converted</label><span id="msg5" class="text-danger"></span>
          <select id="convert">
           <option>Converted</option>
           <option>Not Converted</option>
          </select>
          <br/>

          <label for="">Notes</label><span id="msg5" class="text-danger"></span>
          <input type="text" class="form-control"  id="notes" aria-describedby="emailHelp"><br />
          <br/>
                
        </div>
        </form>
          <button id="submit" class="btn btn-primary" value="submit"> Submit Information </button><br /><br />
		
      </div>
      <div class="modal-footer">
        <p id='submitornot'></p>
      </div>
    </div>
  </div>
</div>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>  
    <script src="controller/popup.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="controller/showdata.js"></script>
    
    <script src="controller/dlt.js"></script>
    <script>
      $('#contact').change(function(){

        var cont = $('#contact').val();
        $.ajax({
            url:'controller/showoption.php',
            type:'post',
            data:{
                cont:cont
            },                
          success: function(response){
            $('#convert').html(response);
          }
        });
      });
  </script>
  <script src="controller/idcheck.js"></script> 
  <script src="controller/formsub.js"></script>
  </body>
</html>