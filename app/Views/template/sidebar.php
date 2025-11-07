 <a href="" class="brand-link">
     <img src="<?= base_url('AdminLTE/dist/img/logo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">SPMB INKTA V.2</span>
 </a>

 <!-- Sidebar -->
 <div class="sidebar">
     <!-- Sidebar user (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
             <img src="<?= base_url('AdminLTE/dist/img/logo.png') ?>" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
             <a href="#" class="d-block"><?= session()->get('nama_user') ?></a>
             <a href="#" class="d-block"><?= session()->get('level') ?></a>
         </div>
     </div>

     <!-- SidebarSearch Form -->
     <div class="form-inline">
         <div class="input-group" data-widget="sidebar-search">
             <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
                 <button class="btn btn-sidebar">
                     <i class="fas fa-search fa-fw"></i>
                 </button>
             </div>
         </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             <li class="nav-item">
                 <a href="<?= base_url('admin') ?>" class="nav-link <?= $menu == 'admin' ? 'active' : '' ?>">
                     <i class="nav-icon fas fa-home"></i>
                     <p>
                         Dashboard
                     </p>
                 </a>
             </li>
             <li class="nav-item ">
                 <a href="<?= base_url('ta') ?>" class="nav-link <?= $menu == 'ta' ? 'active' : '' ?>">
                     <i class=" nav-icon fas fa-calendar"></i>
                     <p>
                         Tahun Ajaran
                     </p>
                 </a>
             </li>
             <li class="nav-item ">
                 <a href="<?= base_url('admin/user') ?>" class="nav-link <?= $menu == 'user' ? 'active' : '' ?>">
                     <i class=" nav-icon fas fa-users"></i>
                     <p>
                         User
                     </p>
                 </a>
             </li>
             <li class="nav-item ">
                 <a href="<?= base_url('sekolah') ?>" class="nav-link <?= $menu == 'sekolah' ? 'active' : '' ?>">
                     <i class=" nav-icon fas fa-building"></i>
                     <p>
                         Nama Sekolah
                     </p>
                 </a>
             </li>


             <li class="nav-header">SPMB</li>
             <li class="nav-item">
                 <a href="<?= base_url('formulir') ?>" class="nav-link <?= $menu == 'formulir' ? 'active' : '' ?>">
                     <i class="nav-icon fas fa-clipboard-list"></i>
                     <p>
                         Formulir

                     </p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="<?= base_url('transaksi') ?>" class="nav-link <?= $menu == 'transaksi' ? 'active' : '' ?>">
                     <i class="nav-icon fas fa-money-bill-wave-alt"></i>
                     <p>
                         Transaksi
                     </p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="<?= base_url('rekap') ?>" class="nav-link">
                     <i class="nav-icon fas fa-paper-plane"></i>
                     <p>
                         Rekap
                     </p>
                 </a>
             </li>

             <li class="nav-header">SEKOLAH</li>
             <li class="nav-item">
                 <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-graduation-cap"></i>
                     <p>
                         PTK
                         <i class="right fas fa-angle-left"></i>
                     </p>
                 </a>
                 <ul class="nav nav-treeview">
                     <li class="nav-item">
                         <a href="../charts/flot.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>PTK</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="../charts/inline.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Tendik</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="../charts/uplot.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>PTK Keluar</p>
                         </a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item">
                 <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-users"></i>
                     <p>
                         Peserta Didik
                         <i class="right fas fa-angle-left"></i>
                     </p>
                 </a>
                 <ul class="nav nav-treeview">
                     <li class="nav-item">
                         <a href="../charts/flot.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>PD Aktif</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="../charts/inline.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>PD Keluar</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="../charts/uplot.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>PTK Keluar</p>
                         </a>
                     </li>
                 </ul>
             </li>

             <li class="nav-item ">
                 <a href="<?= base_url('auth/logout') ?>" class="btn btn-block bg-white">
                     <i class=" nav-icon fas fa-sign-out-alt"></i>
                     Logout
                 </a>
             </li>
         </ul>
     </nav>
     <!-- /.sidebar-menu -->
 </div>