<?php
session_start();
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
<section class="wrapper" id="showcase">
    <div class="container">
        <div class="col-sm-8 offset-sm-2 col-lg-6  offset-lg-3 col-xl-4 offset-xl-4 text-light">
            <?php
            include("msg.php");
            ?>

            <form action="logincode.php" method="POST" class=" bg-transparent shadow p-5">
                <h1 class="text-light text-center">Log In Form</h1>
                
                <div class="form-group mb-3">
                <?php
            include("msg.php");
            ?>
            <label for="">Email address</label>
                   <input type="email" name="email" class="form-control" placeholder="name@example.com">
                    
                    
                     
                       
                     
                    
                </div>
                  
                <div class="form-group">
                <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password">
                    

                    
                     

                      
                
                </div>
                <input type="submit" name="login_btn" class="btn btn-primary text-light submit_btn w-25 my-4" value="Log In">
                <a href="index.php" class="btn  btn-primary btn-lg btn-outline-primary text-light my-4 mr-19" type="submit">Sign up</a>
            </form>


        </div>

    </div>

</section>
</body>