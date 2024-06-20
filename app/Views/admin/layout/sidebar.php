 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link " href="<?= base_url('admin'); ?>">
                 <i class="bi bi-house-door-fill"></i>
                 <span>Home</span>
             </a>
         </li><!-- End Dashboard Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-folder-fill"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="<?= base_url('admin/dataPengunjung'); ?>">
                         <i class="bi bi-people-fill"></i><span>Data Pengunjung</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?= base_url('admin/dataInstansiTujuan'); ?>">
                         <i class="bi bi-building-fill"></i><span>Data Instansi Tujuan</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?= base_url('admin/dataMaksudKunjungan'); ?>">
                         <i class="bi bi-file-earmark-fill"></i><span>Data Maksud Kunjungan</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?= base_url('admin/dataKritikSaran'); ?>">
                         <i class="bi bi-archive-fill"></i><span>Data Kritik dan Saran</span>
                     </a>
                 </li>
             </ul>
         </li><!-- End Components Nav -->
 </aside><!-- End Sidebar-->