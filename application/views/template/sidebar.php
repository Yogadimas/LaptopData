<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('Admin/dashboard'); ?>" class="brand-link">
        <img src="<?= base_url() ?>assets/dist/img/logo_laptopdata.png" alt="Laptop Data Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
        <span class="brand-text font-weight-bold">LAPTOPDATA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-1 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>assets/dist/img/dimas.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?= base_url('Admin/dashboard'); ?>" class="d-block">Yoga Dimas</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-0">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="<?= base_url('Admin/dashboard'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Acer/index'); ?>" class="nav-link">
                        <i class="nav-icon fa-solid fa-laptop"></i>
                        <p>
                            ACER
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Asus/index'); ?>" class="nav-link">
                        <i class="nav-icon fa-solid fa-laptop"></i>
                        <p>
                            ASUS
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Lenovo/index'); ?>" class="nav-link">
                        <i class="nav-icon fa-solid fa-laptop"></i>
                        <p>
                            LENOVO
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Hp/index'); ?>" class="nav-link">
                        <i class="nav-icon fa-solid fa-laptop"></i>
                        <p>
                            HP
                        </p>
                    </a>
                </li>

                <div class="mt-3 mb-1 ">
                    <div style="height: 0.1px; background-color: gray ;"></div>
                </div>
                <li class="nav-item">
                    <a href="https://github.com/Yogadimas" target="_blank" class="nav-link">
                        <i class="fa-brands fa-github"></i>
                        <p>
                            Github
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.instagram.com/mobiledev8" target="_blank" class="nav-link">
                        <i class="fa-brands fa-instagram"></i>
                        <p>
                            Instagram
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://yogadimasproject.nasiwebhost.com/" target="_blank" class="nav-link">
                        <i class="fa-solid fa-globe"></i>
                        <p>
                            Website
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.youtube.com/channel/UCjEmfTujPHOokSZMEG7kFng" target="_blank" class="nav-link">
                        <i class="fa-brands fa-youtube"></i>
                        <p>
                            Youtube
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>