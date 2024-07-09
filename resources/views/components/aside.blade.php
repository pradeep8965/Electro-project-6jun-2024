
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/admin/dashboard" class="brand-link">
    <span class="d-block brand-text font-weight-light text-center">
        <img width="120"  src="{{$appData['app_logo']}}" />
    </span>
  </a>
    <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{url('/')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                alt="User Image">
        </div>
        <div class="info">
            <a href="/admin/profile" class="d-block">Pradeep prajapati</a>
        </div>
    </div>
    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>
      <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p>
              Product
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('product.index')}}" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>All Product's</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('unit.index')}}" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Unit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>
                Brand
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/admin/brand" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>All  Brands</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="/admin/category" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Category</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
    <!-- /.sidebar -->
</aside>