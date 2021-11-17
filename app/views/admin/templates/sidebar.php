        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
          </ul>

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->

            <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="index3.html" class="brand-link">
            <img src="<?= base_url; ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
            <span class="brand-text font-weight-light">FashionDesignApp</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar d-flex flex-column">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="<?= base_url; ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2 navibar d-flex flex-grow-1 flex-column">
              <ul class="nav nav-pills nav-sidebar flex-column h-100" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                                   with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="<?= base_url; ?>/admin" class="nav-link <?php if ($data['page'] == 'dashboard') {
                                                                      echo 'active';
                                                                    } ?>">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item <?php if (in_array("item", $data['page'])) {
                                      echo 'menu-open';
                                    } ?>">
                  <a href="#" class="nav-link <?php if (in_array("item", $data['page'])) {
                                                echo 'active';
                                              } ?>">
                    <i class="nav-icon fas ion-ios-pricetags-outline"></i>
                    <p>
                      Pakaian
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?= base_url; ?>/admin/item/baju/" class="nav-link <?php if (in_array("baju", $data['page'])) {
                                                                                    echo 'active';
                                                                                  } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Baju</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link <?php if ($data['page'] == 'dashboard') {
                                                    echo 'active';
                                                  } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Celana</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sepatu</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url; ?>/admin/item" class="nav-link <?php if ($data['page'] == 'item') {
                                                                          echo 'active';
                                                                        } ?>">
                    <i class="nav-icon fas ion-ios-pricetags-outline"></i>
                    <p>
                      Item
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url; ?>/admin/user" class="nav-link <?php if ($data['page'] == 'user') {
                                                                          echo 'active';
                                                                        } ?>">
                    <i class="nav-icon fas ion-person-stalker"></i>
                    <p>
                      User
                    </p>
                  </a>
                </li>

              </ul>
              <ul class="nav nav-pills nav-sidebar flex-column flex-end mb-2">
                <li class="nav-item">
                  <a href="#" class="nav-link ">
                    <i class="nav-icon fas ion-log-out"></i>
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