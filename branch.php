<?php
session_start();
include('includes/header.php');
include('includes/top-bar.php');
include('includes/side-bar.php');
include('database/dbcon.php');
?>

<div class="content-wrapper">
 <div class="modal fade" id="addbranch" tabindex="-1" aria-labelledby="exampleModalLabel"   aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Branch Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
    <form action="branch_code.php" method="POST">

      
      <div class="modal-body">
        <div class="form-group">
            <label for="">Branch Name</label>
            <input type="text" name="branch_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Street/Building</label>
            <input type="text" name= "street"class="form-control">
        </div>
        <div class="form-group">
            <label for="">City</label>
            <input type="text" name="city" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Country</label>
            <input type="text" name="country"class="form-control">
        </div>
        <div class="form-group">
            <label for="">Contact</label>
            <input type="text" name="contact"class="form-control">
        </div>

        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="add_branch" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
 </div>
 <!--delete modal-->
 <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel"   aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Branch Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="branch_code.php" method="POST">

      
      <div class="modal-body">
        <input type="hidden" name="delete_id" class="delete_user_id">
        <p> Are you sure ,you want to delete this data?</p>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="deleteuserbtn" class="btn btn-primary">Yes</button>
      </div>
    </form>
    </div>
  </div>
 </div>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Branch-List</h1>
            
          </div><!-- /.col -->
          
        </div><!-- /.row -->
        <hr class="border-primary solid">
      </div><!-- /.container-fluid -->
 </div>
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
                       <h3 class="card-title">Branch List of All Existing Branches</h3>
                       <a href="#" data-toggle="modal" data-target="#addbranch" class="btn btn-dark btn-sm float-right"><i class="fa fa-plus"></i>Add New</a>
                   </div>
                 <!-- /.card-header -->
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr>
                       <th>Id</th>
                       <th>Branch Name</th>
                       <th>Street/Building</th>
                       <th>City</th>
                       <th>Country</th>
                       <th>Contact</th>
                       <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
                    $branchquery="SELECT * FROM branches";
                    $branchquery_run=mysqli_query($con,$branchquery);
                    if(mysqli_num_rows($branchquery_run)>0)
                    {
                      foreach($branchquery_run as $row)
                      {
                        ?>
                        <tr>
                     <td><?php echo $row['id'];?></td>
                     <td><?php echo $row['branch_name'];?>
                     </td>
                     <td><?php echo $row['street'];?></td>
                     <td> <?php echo $row['city'];?></td>
                     <td> <?php echo $row['country'];?></td>
                     <td> <?php echo $row['contact'];?></td>
                     <td> 
                      <button type="button" value="<?php echo $row['id'];?>" class="btn btn-danger btn-sm deletebtn">Delete</button>
                      </td>
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
include('includes/script.php');
?>
<script>
  $(document).ready(function(){
   $('.deletebtn').click(function(e){
    e.preventDefault();
    var user_id =$(this).val();
    $('.delete_user_id').val(user_id);
    $('#deletemodal').modal('show');
   }); 


  }
  
  );</script>
