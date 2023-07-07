<title>BKK TASIKMADU</title>
<!doctype html>
<html lang="en">
<link rel="icon" href="<?php echo base_url() ?>assets/images/it_sup.png">

<!-- SIDEBAR -->

  <body class="vertical  dark rtl ">
    
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="<?= base_url('dashboard') ?>" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="<?= base_url('dashboard') ?>">
              <div>
                    <img  src="<?php echo base_url().'uploads/'.'bkk.png' ?>" width="40" height="60" >
                </div>
            </a>
          </div>
         
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>BUNGA EFEKTIF TABUNGAN</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="<?php echo base_url('tamades') ?>">    
                <i class="fe fe-trending-up fe-16"></i>
                <span class="ml-3 item-text">TAMADES</span>
              </a>
            </li>  
            <li class="nav-item w-100">
              <a class="nav-link" href="<?php echo base_url('simadu') ?>">       
                <i class="fe fe-trending-up fe-16"></i>
                <span class="ml-3 item-text">SIMADU</span>
              </a>
            </li> 
          </ul>    
        </nav>
      </aside>

<!-- END OF SIDEBAR -->





<!--HALAMAN UTAMA-->


     <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row align-items-center mb-2">
                <div class="col">
                  <h2 class="h5 page-title"><strong>PT BPR BKK TASIKMADU (perseroda)</strong></h2>
                </div>
                <div class="col-auto">
                  <form class="form-inline">
                    <div class="form-group d-none d-lg-inline">
                      <label for="reportrange" class="sr-only">Date Ranges</label>
                      <div id="reportrange" class="px-2 py-2 text-muted">
                        <span class="small"></span>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
           
    
  </body>
</html>