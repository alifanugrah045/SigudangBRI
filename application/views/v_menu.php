<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" style="background: #013161;" id="sidenavAccordion">
        
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link active" href="<?= base_url(); ?>C_dashboard">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Menu</div>
            <a class="nav-link" href="<?= base_url(); ?>C_barang_masuk">
              <div class="sb-nav-link-icon"><i class="bi bi-reply"></i></div>
              Data Barang Masuk
            </a>
            <a class="nav-link" href="<?php echo base_url(); ?>C_barang_keluar">
              <div class="sb-nav-link-icon"><i class="bi bi-box-seam"></i></div>
              Data Barang Keluar
            </a>
            <a class="nav-link" href="<?php echo base_url(); ?>C_pegawai">
              <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
              Data Pegawai
            </a>
            <a class="nav-link" href="<?php echo base_url(); ?>C_user">
              <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
              Kelola Users
            </a>
            
          </div>
        </div>
        <div class="sb-sidenav-footer " style="background: #013161;">
          <div class="small">Logged in as:</div>
          Admin
        </div>
      </nav>
    </div>