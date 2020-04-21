<?php
 

 class workdata{

    public $conn; 
    public $query;
    public $servername;
    public $username;
    public $password;
    public $db;

    public $dname;
    public $kwd;
    public $rnk;
    public $vol;
    public $comp;

    public $iddata;

    public $domain;
    public $keyword;
    public $ranking;
    public $volume;
    public $competition;
    
    public $company;
    public $phone;
    public $email;
    public $url;
    public $issues;
    public $converted;
    public $contacted;
    public $notes;

    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "leadsdata";

        $connect = $this->conn = mysqli_connect($servername, $username, $password, $db);
       
      }

    public function insert($cname,$phone,$email,$url,$issue,$contact,$convert,$note){

        
        $query = "INSERT INTO `leads`(`Companyname`, `phone`, `email`, `url`, `issues`, `contacted`, `converted`, `notes`) VALUES ('$cname','$phone','$email','$url','$issue','$contact','$convert','$note')";
        $option="";
        
            if($this->conn->query($query)){
                $alrt = 1;
               # echo "Data submitted";
               $edit = "Edit";
               $delete = "Delete";
                $quer = "SELECT * FROM `leads`";
            $result = $this->conn->query($quer);
            if($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $option = "<tr><td>".$row['id']."</td><td class='text-center'>".$row['Companyname']."</td><td class='text-center'>".$row['phone']."</td><td class='text-center'>".$row['email']."</td><td class='text-center'>".$row['url']."</td><td class='text-center'>".$row['issues']."</td><td class='text-center'>".$row['contacted']."</td><td class='text-center'>".$row['converted']."</td><td class='text-center'>".$row['notes']."</td><td><a href='view/update.php?id=$row[id]' class='text-white'><button class='btn-info pt-1 pl-3 pr-3 pb-1'>".$edit."</button></a></td><td><button onclick=dlt('$row[id]') class='btn-danger pt-1 pl-2 pr-2 pb-1 dlt'>".$delete."</button></td></tr>";
                    if($alrt == 1){
                        $option .="<script> alert('Data inserted'); </script>";
                        $alrt = 2;
                    }
                    echo $option;
                
            }   
        }
     }           
    }
    
    public function show(){
        $edit = "Edit";
        $delete = "Delete";
        $quer = "SELECT * FROM `leads`";
            $result = $this->conn->query($quer);
            if($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $option = "<tr><td>".$row['id']."</td><td class='text-center'>".$row['Companyname']."</td><td class='text-center'>".$row['phone']."</td><td class='text-center'>".$row['email']."</td><td class='text-center'>".$row['url']."</td><td class='text-center'>".$row['issues']."</td><td class='text-center'>".$row['contacted']."</td><td class='text-center'>".$row['converted']."</td><td class='text-center'>".$row['notes']."</td><td><a href='view/update.php?id=$row[id]' class='text-white'><button class='btn-info pt-1 pl-3 pr-3 pb-1'>".$edit."</button></a></td><td><button onclick=dlt('$row[id]') class='btn-danger pt-1 pl-2 pr-2 pb-1 dlt'>".$delete."</button></td></tr>";
               
                    echo $option;
                
            }
         
        }
    }
    public function showforemail(){
        $edit = "Edit";
        $delete = "Delete";
        $rds = 1;
        $quer = "SELECT * FROM `leads`";
            $result = $this->conn->query($quer);
            if($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $option = "<tr><td>".$row['id']."</td><td class='text-center'>".$row['Companyname']."</td><td class='text-center'>".$row['phone']."</td><td class='text-center'>".$row['email']."</td><td class='text-center'>".$row['url']."</td><td class='text-center'>".$row['issues']."</td><td class='text-center'>".$row['contacted']."</td><td class='text-center'>".$row['converted']."</td><td class='text-center'>".$row['notes']."</td><td><a href='view/update.php?id=$row[id]' class='text-white'><button class='btn-info pt-1 pl-3 pr-3 pb-1'>".$edit."</button></a></td><td><button onclick=dlt('$row[id]') class='btn-danger pt-1 pl-2 pr-2 pb-1 dlt'>".$delete."</button></td></tr>";
                    if($rds == 1){
                        $option .= "<script> alert('Not a valid email'); </script>";
                        $rds = 0;
                    }        
                    echo $option;
                    
            }
                         
        }
    }
    public function showphno(){
        $edit = "Edit";
        $delete = "Delete";
        $rds = 1;
        $quer = "SELECT * FROM `leads`";
            $result = $this->conn->query($quer);
            if($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $option = "<tr><td>".$row['id']."</td><td class='text-center'>".$row['Companyname']."</td><td class='text-center'>".$row['phone']."</td><td class='text-center'>".$row['email']."</td><td class='text-center'>".$row['url']."</td><td class='text-center'>".$row['issues']."</td><td class='text-center'>".$row['contacted']."</td><td class='text-center'>".$row['converted']."</td><td class='text-center'>".$row['notes']."</td><td><a href='view/update.php?id=$row[id]' class='text-white'><button class='btn-info pt-1 pl-3 pr-3 pb-1'>".$edit."</button></a></td><td><button onclick=dlt('$row[id]') class='btn-danger pt-1 pl-2 pr-2 pb-1 dlt'>".$delete."</button></td></tr>";
                    if($rds == 1){
                        $option .= "<script> alert('Not a valid phone number'); </script>";
                        $rds = 0;
                    }        
                    echo $option;
                    
            }
                         
        }
    }
    public function showdataid($id){
        $edit = "Edit";
        $delete = "Delete";
        
        $quer = "SELECT * FROM `leads` WHERE `id` = $id";
            $result = $this->conn->query($quer);
            
            if($result->num_rows < 1){
                $edit = "Edit";
                $delete = "Delete";
                $rds = 1;
                $quer = "SELECT * FROM `leads`";
                    $result = $this->conn->query($quer);
                    if($result->num_rows > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $option = "<tr><td>".$row['id']."</td><td class='text-center'>".$row['Companyname']."</td><td class='text-center'>".$row['phone']."</td><td class='text-center'>".$row['email']."</td><td class='text-center'>".$row['url']."</td><td class='text-center'>".$row['issues']."</td><td class='text-center'>".$row['contacted']."</td><td class='text-center'>".$row['converted']."</td><td class='text-center'>".$row['notes']."</td><td><a href='view/update.php?id=$row[id]' class='text-white'><button class='btn-info pt-1 pl-3 pr-3 pb-1'>".$edit."</button></a></td><td><button onclick=dlt('$row[id]') class='btn-danger pt-1 pl-2 pr-2 pb-1 dlt'>".$delete."</button></td></tr>";
                           if($rds==1){
                            $option .= "<script>alert('Your ID not found in our database');</script>";
                            
                            $rds=2;
                           }
                           echo $option;
                            
                        }
               
            }
        }
            else{
                while($row = mysqli_fetch_assoc($result)){
                    $option = "<tr><td>".$row['id']."</td><td class='text-center'>".$row['Companyname']."</td><td class='text-center'>".$row['phone']."</td><td class='text-center'>".$row['email']."</td><td class='text-center'>".$row['url']."</td><td class='text-center'>".$row['issues']."</td><td class='text-center'>".$row['contacted']."</td><td class='text-center'>".$row['converted']."</td><td class='text-center'>".$row['notes']."</td><td><a href='view/update.php?id=$row[id]' class='text-white'><button class='btn-info pt-1 pl-3 pr-3 pb-1'>".$edit."</button></a></td><td><button onclick=dlt('$row[id]') class='btn-danger pt-1 pl-2 pr-2 pb-1 dlt'>".$delete."</button></td></tr>";
                        
                    echo $option;
                    
            }                
        }
     }
    
    public function showurl(){
        $edit = "Edit";
        $delete = "Delete";
        $rds = 1;
        $quer = "SELECT * FROM `leads`";
            $result = $this->conn->query($quer);
            if($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $option = "<tr><td>".$row['id']."</td><td class='text-center'>".$row['Companyname']."</td><td class='text-center'>".$row['phone']."</td><td class='text-center'>".$row['email']."</td><td class='text-center'>".$row['url']."</td><td class='text-center'>".$row['issues']."</td><td class='text-center'>".$row['contacted']."</td><td class='text-center'>".$row['converted']."</td><td class='text-center'>".$row['notes']."</td><td><a href='view/update.php?id=$row[id]' class='text-white'><button class='btn-info pt-1 pl-3 pr-3 pb-1'>".$edit."</button></a></td><td><button onclick=dlt('$row[id]') class='btn-danger pt-1 pl-2 pr-2 pb-1 dlt'>".$delete."</button></td></tr>";
                    if($rds == 1){
                        $option .= "<script> alert('Not a valid url'); </script>";
                        $rds = 0;
                    }        
                    echo $option;
                    
            }
                         
        }
    }
    public function update($name,$phone,$email,$url,$issues,$contact,$convert,$notes,$id){
      
      $query = "UPDATE `leads` SET `Companyname`='$name',`phone`='$phone',`email`='$email',`url`='$url',`issues`='$issues', `contacted`='$contact',`converted`='$convert',`notes`='$notes' WHERE `id`=$id";
      #$query = "UPDATE leads SET 'Companyname'=$name,'phone'=$phone,'email'=$email,'url'=$url,'issues'=$issues,'contacted'=$contact,'converted`=$convert,'notes'=$notes WHERE 'id'=$id";
      $result = $this->conn->query($query);
      if($result){ 
          echo "Data updated successfully";
      }
      else{
         echo "Error updating record: " . $this->conn->error;
      }
           

    }
    public function delete($id){
        $query = "DELETE FROM `leads` WHERE id='$id';";
  
        if($this->conn->query($query)){
       
        # echo "data deleted";
         $edit = "Edit";
         $delete = "Delete";
         $quer = "SELECT * FROM `leads`";
             $result = $this->conn->query($quer);
             if($result->num_rows > 0){
                 while($row = mysqli_fetch_assoc($result)){
                    $option = "<tr><td>".$row['id']."</td><td class='text-center'>".$row['Companyname']."</td><td class='text-center'>".$row['phone']."</td><td class='text-center'>".$row['email']."</td><td class='text-center'>".$row['url']."</td><td class='text-center'>".$row['issues']."</td><td class='text-center'>".$row['contacted']."</td><td class='text-center'>".$row['converted']."</td><td class='text-center'>".$row['notes']."</td><td><a href='view/update.php?id=$row[id]' class='text-white'><button class='btn-info pt-1 pl-3 pr-3 pb-1'>".$edit."</button></a></td><td><button onclick=dlt('$row[id]') class='btn-danger pt-1 pl-2 pr-2 pb-1 dlt'>".$delete."</button></td></tr>";
                     echo $option;
                 
             }
          
         }
    
     }
    }
    public function showfld($id){
        $query = "SELECT * FROM `leads` WHERE id = '$id'";
       
        $result = $this->conn->query($query);
        if ($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                
                 $this->company  = $row['Companyname'];
                 $this->phone = $row['phone'];
                 $this->email = $row['email'];
                 $this->url  = $row['url'];
                 $this->issues = $row['issues'];
                 $this->contacted = $row['contacted'];
                 $this->converted = $row['converted'];
                 $this->notes = $row['notes'];
                
            }
        }

    }
}




?>