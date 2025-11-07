 <aside class="main-sidebar sidebar-light-dark elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="<?= base_url() ?>/foto/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light"> V.1 </span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">

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
                 <li class="nav-item ">
                     <a href="<?= base_url('admin') ?>" class="nav-link <?= $menu == 'admin' ? 'active' : '' ?>">
                         <i class=" nav-icon fas fa-home"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
                 <?php if (session('level') == 'admin') : ?>
                     <li class="nav-item ">
                         <a href="<?= base_url('ta') ?>" class="nav-link <?= $menu == 'ta' ? 'active' : '' ?>">
                             <i class=" nav-icon fas fa-calendar"></i>
                             <p>
                                 Setting Tahun
                             </p>
                         </a>
                     </li>
                     <li class="nav-item ">
                         <a href="<?= base_url('formulir') ?>" class="nav-link <?= $menu == 'formulir' ? 'active' : '' ?>">
                             <i class=" nav-icon fab fa-wpforms"></i>
                             <p>
                                 Formulir
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
                             <i class=" nav-icon  fas fa-school"></i>
                             <p>
                                 Nama Sekolah
                             </p>
                         </a>
                     </li>
                 <?php endif; ?>





                 <?php if (session('level') == 'bendahara') : ?>
                     <li class="nav-item ">
                         <a href="<?= base_url('formulir') ?>" class="nav-link <?= $menu == 'formulir' ? 'active' : '' ?>">
                             <i class=" nav-icon fab fa-wpforms"></i>
                             <p>
                                 Formulir
                             </p>
                         </a>
                     </li>
                 <?php endif; ?>

                 <?php if (session('level') == 'user') : ?>
                     <li class="nav-item ">
                         <a href="<?= base_url('formulir') ?>" class="nav-link <?= $menu == 'formulir' ? 'active' : '' ?>">
                             <i class=" nav-icon fab fa-wpforms"></i>
                             <p>
                                 Formulir
                             </p>
                         </a>
                     </li>
                 <?php endif; ?>

                 <?php if (session('level') == 'kasir') : ?>
                     <li class="nav-item ">
                         <a href="<?= base_url('transaksi') ?>" class="nav-link <?= $menu == 'transaksi' ? 'active' : '' ?>">
                             <i class=" nav-icon  fa-solid fa-money-bill"></i>
                             <p>
                                 Transaksi
                             </p>
                         </a>
                     </li>
                 <?php endif; ?>
                 <li class="nav-item ">
                     <a href="<?= base_url('auth/logout') ?>" class="nav-link ">
                         <i class=" nav-icon fas fa-sign-out-alt"></i>
                         <p>
                             Logout
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>