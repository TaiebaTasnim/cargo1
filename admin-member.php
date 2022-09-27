<?php
session_start();
include('includes/header.php');
include('includes/top-bar.php');
include('includes/side-bar.php');
include('database/dbcon.php');

?>
<div class="content-wrapper">
<div class="modal fade" id="addadmin" tabindex="-1" aria-labelledby="exampleModalLabel"   aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New admin Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="admin_code.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
            <label for="">Admin name</label>
            <input type="text" name="admin_name" class="form-control" placeholder=" name">
        </div>
        <div class="form-group">
            <label for="">email</label>
            <input type="email" name="email" class="form-control" placeholder="email">
        </div>
        <div class="form-group">
            <label for="">Branch name</label>
            <input type="text" name="branch_name" class="form-control" placeholder="branch_name">
        </div>
        <div class="form-group">
            <label for="">Phone number</label>
            <input type="text" name="phone" class="form-control" placeholder="phone number">
        </div>
       
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="add_admin" class="btn btn-primary">Save</button>
      </div>
    </div>
   </form>
  </div>
 </div>
 <!--Delete modal-->
 <div class="modal fade" id="delete_modal" tabindex="-1" aria-labelledby="exampleModalLabel"   aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="admin_code.php" method="POST">

      
      <div class="modal-body">
        <input type="hidden" name="deleteid" class="delete_admin_id">
        <p> Are you sure ,you want to delete this data?</p>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="deleteadminbtn" class="btn btn-primary">Yes</button>
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
            <h1 class="m-0">Admin List</h1>
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
                       <h3 class="card-title">Admin List of all admins</h3>
                       <a href="#" data-toggle="modal" data-target="#addadmin" class="btn btn-dark btn-sm float-right"><i class="fa fa-plus"></i>Add New</a>
                   </div>
                 <!-- /.card-header -->
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr>
                       <th>Id</th>
                       <th>Admin name</th>
                       <th>Branch name</th>
                       <th>Email</th>
                       <th>Phone number</th>
                       <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php
                    $adminquery="SELECT * FROM admin";
                    $adminquery_run=mysqli_query($con,$adminquery);
                    if(mysqli_num_rows($adminquery_run)>0)
                    {
                      foreach($adminquery_run as $row)
                      {
                        ?>
                        <tr>
                     <td><?php echo $row['id'];?></td>
                     <td><?php echo $row['admin_name'];?>
                     </td>
                     <td><?php echo $row['branch_name'];?></td>
                     <td><?php echo $row['email'];?></td>
                     <td> <?php echo $row['phone'];?></td>
                     
                     <td> 
                      <button type="button" value="<?php echo $row['id'];?>" class="btn btn-danger btn-sm delete_btn">Delete</button>
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
include('includes/script.php');?>
<script>
  $(document).ready(function(){
   $('.delete_btn').click(function(e){
    e.preventDefault();
    var admin_id =$(this).val();
    $('.delete_admin_id').val(admin_id);
    $('#delete_modal').modal('show');
   }); 


  }
  
  );</script>