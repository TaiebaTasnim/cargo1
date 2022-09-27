<?php
session_start();
include('includes/header.php');
include('includes/top-bar.php');
include('includes/side-bar.php');
?>
<link rel="stylesheet" href="css/style.css">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          
          <div class="col-sm-6">
          
            <h1 class="m-0">Home</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
         <hr class="border-primary solid">
      </div><!-- /.container-fluid -->
      <?php
          include("msg.php");
          ?>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/script.php');
?>
