<title>BKK TASIKMADU</title>
<!doctype html>
<html lang="en">
<link rel="icon" href="<?php echo base_url() ?>assets/images/it_sup.png">

<!-- SIDEBAR -->

  <body class="vertical  dark rtl ">
    
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
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
              <div class="row">
                <div class="col-md-12">
                  <div class="card shadow mb-4">
                    <div class="card-header bg-warning">
                      <strong class="card-title ">Perhitungan Bunga Efektif Tabungan (SIMADU)</strong>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="<?php echo base_url('simadu/proses')?>" enctype="multipart/form-data" class="needs-validation" novalidate>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="inputEmail4">Nominal Simpanan</label>
                        <input class="form-control input-det"  type="text" name="Nominal" required>
                        <div class="invalid-feedback"> Gaboleh kosong kak :( </div>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputEmail4">Jangka Waktu Blokir</label>
                        <input class="form-control input-det"  type="text" name="Jangka_waktu" required>
                        <div class="invalid-feedback"> Gaboleh kosong kak :( </div>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputPassword4">Estimasi Biaya Hadiah (Cashback)</label>
                        <input class="form-control input-det"  type="text" name="Hadiah" required>
                        <div class="invalid-feedback"> Gaboleh kosong kak :( </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-2">
                            <label for="inputAddress">Suku Bunga</label>
                        <input type="text" id="example-readonly" class="form-control" readonly="" name="Suku_bunga" value="1%">
                          </div>
                        </div>

                          <div class="row form-group">
                            <div class="col offset-md-5">
                              <button type="submit" class="btn btn-primary"><i class="fe fe-send fe-16"></i> Hitung !</button>
                              <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                          </div>

                      </form>
                    </div> <!-- /. card-body -->
                  </div> <!-- /. card -->
                </div> <!-- /. col -->
              </div> <!-- /. end-section -->
            </div>
          </div>
        </div>
      </main>
    
    </div> <!-- .wrapper -->
    
  </body>
</html>