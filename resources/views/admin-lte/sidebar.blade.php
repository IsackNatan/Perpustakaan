 <aside class="main-sidebar sidebar-white-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <span class="brand-text font-weight-light">Perpustakaan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <p>Halo, <a href="#"> {{auth()->user()->name}}</a></p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link @yield('active-dashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Master</li>
        
          <li class="nav-item">
            <a href="#" class="nav-link @yield('active-data-master')">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kategori" class="nav-link  @yield('active-kategori')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/rak" class="nav-link  @yield('active-rak')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penerbit" class="nav-link  @yield('active-penerbit')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penerbit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/buku1" class="nav-link  @yield('active-buku')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/transaksi" class="nav-link @yield('active-transaksi')">
              <i class="fas fa-hands"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>
         
          @role('admin')
              <li class="nav-header">ADMIN</li>

              <li class="nav-item">
                <a href="/user" class="nav-link @yield('active-user')">
                  <i class="fas fa-users"></i>
                  <p>
                    User
                  </p>
                </a>
              </li>
          @endrole
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>