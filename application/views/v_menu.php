<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark fixed-top" style="background: #013161;" id="sidenavAccordion">

      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading">Core</div>
          <a class="nav-link <?php if($this->uri->segment('1') == 'C_dashboard') { echo "active" ;} ?>" href="<?= base_url(); ?>C_dashboard" >
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Dashboard
          </a>
          <div class="sb-sidenav-menu-heading">Menu</div>
          <a class="nav-link <?php if($this->uri->segment('1') == 'C_barang') { echo "active" ;} ?>" href="<?= base_url(); ?>C_barang">
            <div class="sb-nav-link-icon"><i class="bi bi-cart-check-fill"></i></div>
            Data Barang
          </a>
          <a class="nav-link <?php if($this->uri->segment('1') == 'C_barang_masuk') { echo "active" ;} ?>" href="<?= base_url(); ?>C_barang_masuk">
            <div class="sb-nav-link-icon"><i class="bi bi-cart-check-fill"></i></div>
            Data Barang Masuk
          </a>
          <a class="nav-link <?php if($this->uri->segment('1') == 'C_barang_keluar') { echo "active" ;} ?>" href="<?php echo base_url(); ?>C_barang_keluar">
            <div class="sb-nav-link-icon"><i class="bi bi-cart-dash-fill"></i></div>
            Data Barang Keluar
          </a>
          <a class="nav-link <?php if($this->uri->segment('1') == 'C_unit') { echo "active" ;} ?>" href="<?php echo base_url(); ?>C_unit">
            <div class="sb-nav-link-icon"><i class="bi bi-send-fill"></i></div>
            Data Unit
          </a>
          <a class="nav-link <?php if($this->uri->segment('1') == 'C_suplier') { echo "active" ;} ?>" href="<?php echo base_url(); ?>C_suplier">
            <div class="sb-nav-link-icon"><i class="bi bi-truck"></i></div>
            Data Suplier
          </a>
          <a class="nav-link <?php if($this->uri->segment('1') == 'C_pegawai') { echo "active" ;} ?>" href="<?php echo base_url(); ?>C_pegawai">
            <div class="sb-nav-link-icon"><i class="bi bi-person-square"></i></div>
            Data Pegawai
          </a>
          <a class="nav-link <?php if($this->uri->segment('1') == 'C_user') { echo "active" ;} ?>" href="<?php echo base_url(); ?>C_user">
            <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
            Kelola Users
          </a>
          <!-- <a class="nav-link <?php if($this->uri->segment('1') == 'C_laporan_masuk') { echo "active" ;} ?>" href="<?php echo base_url(); ?>C_laporan_masuk">
            <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
            Laporan Masuk
          </a> -->

        </div>
      </div>
      <div class="sb-sidenav-footer " style="background: #013161;">
        <div class="small">Logged in as:</div>
        <?php echo $this->session->userdata('username') ?>
      </div>
    </nav>
  </div>