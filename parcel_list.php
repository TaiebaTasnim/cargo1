<?php
include('includes/header.php');
include('includes/top-bar.php');
include('includes/side-bar.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Parcel List</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
         <hr class="border-primary solid">
      </div><!-- /.container-fluid -->
    </div>
    <div class="container ">
        <div class="row">
          <div class="col-lg-12 ">
        
             <div class="card card-outline card-primary">
                   <div class="card-header">
                       <h3 class="card-title">All Parcel List</h3>
                       <a href="new_parcel.php"  class="btn btn-dark btn-sm float-right"><i class="fa fa-plus"></i>Add New</a>
                   </div>
                 <!-- /.card-header -->
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                     <tr>
                       <th>Id</th>
                       <th>Reference Number</th>
                       <th>Sender Name</th>
                       <th>Recipient Name</th>
                       <th>Status</th>
                       <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                  <tr>
                     <td>Trident</td>
                     <td>Internet
                      Explorer 4.0
                     </td>
                     <td>Win 95+</td>
                     <td> raj</td>
                     <td> Collected</td>
                     <td>X</td>
                    </tr>
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