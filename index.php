<?php
session_start();
include('database/dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargo Courier</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/style.css">
</head>


<body>
    <!--navber section starts-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Cargo
            </a>
            <form method="post">
            <a href="login.php" class="btn btn-outline-primary" type="submit">Sign In</a>
            </form>
        </div>
    </nav>
    <!--navber section ends-->

    <!--hero section-->
    <section id="hero" class="bg-dark text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
            <h1>Track and Trace your Courier</h1>
            <form action="" method="POST">    
                    
                        <div class="input-group form-container ">
                         
                            <input type="text" name="get_id"id="ref_no" class="form-control form-control-sm" placeholder="Type the reference number here" required autofocus="autofocus" autocomplete="off" requird>
                            <div class="input-group-append">
                            <button name ="track_btn" class="btn  text-light btn-search" data-target="#track" >Search</button>  
                            </div>
                            
                            
                            
                          </form>
                        </div>
                    </div>
            </div>
        </div>
   </div>
   <?php

   if(isset($_POST['track_btn']))
   {
    $id=$_POST['get_id'];
    $query="SELECT * FROM parcels WHERE reference_number='$id'";
    $query_run=mysqli_query($con,$query);

    if(mysqli_num_rows($query_run)>0)
    {
        while($row=mysqli_fetch_array($query_run))
        {
            ?>
          
      
      <div class="modal-body">
        <div class="form-group">
            <label for="">Sender name</label>
            <input type="text" name="sender_name" class="form-control" value="<?php echo $row['sender_name'] ; ?>"placeholder="sender name" required>
        </div>
        <div class="form-group">
            <label for="">Recipient Name</label>
            <input type="text" name="recipient_name" class="form-control"value="<?php echo $row['recipient_name'] ; ?>" placeholder="recipient name" required>
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <input type="text" name="status" class="form-control" value="<?php echo $row['status'] ; ?>" placeholder="status" required>
        </div>
        <div class="form-group">
            <label for="">Delivery branch</label>
            <input type="email" name="delivery_branch" class="form-control" value="<?php echo $row['delivery_branch'] ; ?>" placeholder="delivery branch" required>
        </div>
        
        

        
      
 <?php
        }  
        
        }
        else
        {
            echo "No Record Found!";
        }
    }

   
   ?>


 </section>



    
                        
 </body>
