<?php
include('../model/class.php');

if(!isset($_GET['id'])){
    die("Cannot access this page directly!");
  }
 else{
     $iddta = $_GET['id'];
 
     $shwdta = new workdata();
 
     $shwdta->showfld($iddta);
 
 
 }

 
?>

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
  <h1 class="text-center pt-5">Update Information</h1> 
  <div class="row">
    <div class="col-md-8"></div>
    <div class="col-md-4"><a href="../index.php">Home</a> </div>
  </div>
	<div class="container mt-5">
     
     <div class="row">
      <div class="col-md-12">
	   <form>
	  	<div class="form-group">
		    <label for="">Company Name</label>
		  	<input type="text" class="form-control" placeholder="<?php echo $shwdta->company; ?>" id="name" aria-describedby="emailHelp"><br />
			

		  	<label for="">Phone</label>
		  	<input type="text" class="form-control" placeholder="<?php echo $shwdta->phone; ?>" id="phone" aria-describedby="emailHelp"><br />
			

		  	<label for="">Email</label>
			  <input type="text" class="form-control" placeholder="<?php echo $shwdta->email; ?>" id="email" aria-describedby="emailHelp"><br />

           <label for="">URL</label>
			  <input type="text" class="form-control" placeholder="<?php echo $shwdta->url; ?>" id="url" aria-describedby="emailHelp"><br />

           <label for="">Issues</label>
              <input type="text" class="form-control" placeholder="<?php echo $shwdta->issues; ?>" id="issues" aria-describedby="emailHelp"><br />

           <label for="">Contacted/Not Contacted</label>
              <select id="contact">
                <option>Contacted</option>
                <option>Not Contacted</option>
              </select><br>

            <label for="">Converted or not</label>
              <select id="convert">
                <option>Converted</option>
                <option>Not Converted</option>
             </select>
              <br />

            <label for="">Notes</label>
			      <input type="text" class="form-control" placeholder="<?php echo $shwdta->notes; ?>" id="notes" aria-describedby="emailHelp"><br />

              <input type="hidden" id="hdnid" value="<?php echo $iddta;?>">
          </div>
			</form>
		    <button id="submit" class="btn btn-primary" value="submit"> Update Information </button><br /><br />
		
		<div id="resp" class="text-center"></div>
	  </div>
	 </div>
    </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>  
    <script src="controller/popup.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      $('#contact').change(function(){

        var cont = $('#contact').val();
        $.ajax({
            url:'../controller/showoption.php',
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
    <script src="../controller/update.js"></script>
    
  </body>
</html>