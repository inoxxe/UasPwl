<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('penjual'); ?>" class="brand-link">
      <span class="brand-text font-weight-light">SI-DIN - <?php echo $this->session->userdata('username');?></span>
    </a>
    <!--side navbar bottom-->
     <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        
        </div>
        <div class="info">
          <a href="<?php echo base_url('penjual/profil'); ?>" class="d-block"><?php echo $this->session->userdata('nama');?></a>
        </div>
      </div>
       <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/control_peminjaman/kelas'); ?>" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="<?php echo base_url('penjual/pemesanan'); ?>" class="nav-link">
              <i class="nav-icon fa fa-area-chart"></i>
              <p>
                KRS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/control_peminjaman/pinjam'); ?>" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Peminjaman Kelas
              </p>
            </a>
          </li>
      </nav>
     </div>
</aside>