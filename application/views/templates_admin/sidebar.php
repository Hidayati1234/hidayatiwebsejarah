 <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                   <i class="fab fa-accusoft"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> DESA DARMASARI </div>
            </a>

            <!-- Divider -->


            <hr class="sidebar-divider ">

             <li class="nav-item nav-profile">
             <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="profile-image">
                     <img class="img-xs rounded-circle" src="<?= base_url('assets2/img/jk.jpg'); ?>" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <div class="sidebar-heading">
                  Admin
               </div>
                  <h6>NURHIDAYATI</h6>
              </div>
              </a>
              </li>    
            
             <hr class="sidebar-divider">



            <!-- Nav Item - Dashboard -->
              <div class="sidebar-heading">
               Administrator
               </div>

           <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fal fa-fw fa-file-word"></i>
                    <span>Data Registrasi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fal fa-fw fa-file-word"></i>
                    <span>Data Sejarah</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('C_home/home'); ?>">
                    <i class="fal fa-fw fa-file-word"></i>
                    <span>Tampilan User</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Auth') ?>">
                    <i class="fas fa-fw fa-sign-out-alt "></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->