<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="dropdown">
   	<a href="./" class="brand-link">
        
        <h3 class="text-center p-0 m-0"><b>ADMIN</b></h3>
    </a>
  </div>

    <!-- Sidebar -->
    <div class="sidebar pb-4 mb-4">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
         
          <a href="admin.php" class="nav-link nav-home">
           <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                Dashboard
               </p>
            </a>
         
          <div>
            <a href="branch.php" class="nav-link nav-edit_branch">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Branch
                
              </p>
            </a>
          </div>
          <div>
            <a href="branch-staff.php" class="nav-link nav-edit_staff">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Branch Staff
                
              </p>
            </a>
          </div>
          <div>
            <a href="new_parcel.php" class="nav-link nav-edit_staff">
              <i class="nav-icon  fas fa-boxes"></i>
              <p>
                Parcel List
                
              </p>
            </a>
          </div>
          <div>
          <a href="admin-member.php" class="nav-link nav-edit_staff">
              <i class="nav-icon  fa fa-cog"></i>
              <p>
                Admin member
                
              </p>
            </a>
          </div>
          
          <div>
          <form action="branch_code.php" method="POST">
                <button type="submit" name="logout_btn" class="nav-link nav-new_branch tree-item btn-dark btn-sm text-white">log out
                  <i class="fa fa-power-off"></i>
                  
                </button>
          </form>
          </div>
          
          
          
          
          
        </ul>  
      </nav> 
    </div>
</aside>
