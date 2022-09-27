<?php
session_start();
include('includes/header.php');
include('includes/top-bar.php');
include('includes/side-bar.php');
include('database/dbcon.php');

?>
<style>
  textarea{
    resize: none;
  }
</style>
<div class="content-wrapper">
<div class="modal fade" id="addparcel" tabindex="-1" aria-labelledby="exampleModalLabel"   aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New parcel Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="parcel_code.php" method="POST">
      <div class="modal-body">
      <div class="form-group">
            <label for="">Reference number</label>
            <input type="text" name="reference_number" class="form-control" placeholder="reference number">
        </div>
        <div class="form-group">
            <label for="">Sender Name</label>
            <input type="text" name="sender_name" class="form-control" placeholder="sender name">
        </div>
        
        <div class="form-group">
            <label for="">Recipiend name</label>
            <input type="text" name="recipient_name" class="form-control" placeholder="recipient name">
        </div>
        <div class="form-group">
            <label for="">Delivery branch</label>
            <input type="text" name="delivery_branch" class="form-control" placeholder="delivery branch">
        </div>
        <div class="form-group">
            <label for="">Total item</label>
            <input type="text" name="total_item" class="form-control" placeholder="total item">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <input type="text" name="status" class="form-control" placeholder="status">
        </div>
        <div class="form-group">
            <label for="">Total price</label>
            <input type="text" name="total_price" class="form-control" placeholder="total price">
        </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="add_item" class="btn btn-primary">Save</button>
      </div>
    </div>
   </form>
  </div>
 </div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Parcel List</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
        <hr class="border-primary solid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container ">
        <div class="row">
          <div class="col-lg-12 ">
          <?php
            if(isset($_SESSION['status']))
            {
              echo "<h4>".$_SESSION['status']."</h4>";
              unset($_SESSION['status']);
            }

            ?>
        
             <div class="card card-outline card-primary">
                   <div class="card-header">
                       <h3 class="card-title">Parcel list of all parcels</h3>
                       <a href="#" data-toggle="modal" data-target="#addparcel" class="btn btn-dark btn-sm float-right"><i class="fa fa-plus"></i>Add New</a>
                   </div>
                 <!-- /.card-header -->
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr>
                       
                       <th>Reference number</th>
                       <th>Sender name</th>
                       <th>Recipient name</th>
                       <th>Status</th>
                       <th>Delivery branch</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php
                    $parcelquery="SELECT * FROM parcels";
                    $parcelquery_run=mysqli_query($con,$parcelquery);
                    if(mysqli_num_rows($parcelquery_run)>0)
                    {
                      foreach($parcelquery_run as $row)
                      {
                        ?>
                        <tr>
                     <td><?php echo $row['reference_number'];?></td>
                     <td><?php echo $row['sender_name'];?>
                     </td>
                     <td><?php echo $row['recipient_name'];?></td>
                     <td> <?php echo $row['status'];?></td>
                     <td> <?php echo $row['delivery_branch'];?></td>
                     </tr>

                    <?php

                      }

                    }
                    else
                    {
                      ?>
                      <tr>
                        <td> No record found </td>
                    </tr>
                    <?php
                    }
                    ?>
                  
                   </tbody>
                 </table>
              </div>
         </div>
         </div>
     </div>  
     </div>

    

</div>
<?php
include('includes/footer.php');
?>
<?php
include('includes/script.php');?>
