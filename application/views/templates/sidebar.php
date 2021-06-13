<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('welcome') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-industry"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TOKO MEBEL BERSAMA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('welcome') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Semua Produk</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KATEGORI
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/kasur') ?>">
                    <i class="fas fa-bed"></i>
                    <span>Kasur</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/kursi') ?>">
                    <i class="fas fa-chair"></i>
                    <span>Kursi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/lemari') ?>">
                    <span>Lemari</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/meja') ?>">
                    <span>Meja</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                              <li>
                                <?php
                                $keranjang = '<i class="fas fa-shopping-cart"></i> ('.$this->cart->total_items().')'?>

                                <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                              </li>
                            </ul>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <ul class="na navbar-nav navbar-right">
                              <?php if ($this->session->userdata('username')) { ?>
                                <li><div>Welcome, <?php echo $this->session->userdata('username') ?></div></li>
                                <li class="ml-2"><?php echo anchor('auth/logout','Logout <i class="fas fa-power-off"></i>'); ?></li>
                              <?php }else{ ?>
                                <li><?php echo anchor('auth/login', 'Login'); ?></li>
                              <?php } ?>
                            </ul>
                        </div>
                    </ul>

                </nav>
                <!-- End of Topbar -->
