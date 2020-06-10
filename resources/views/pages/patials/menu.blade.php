<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: re">
    <!-- Brand Logo -->
    <a href="{{route('homepage')}}" class="brand-link" style="background-color: #00251a">
      <img src="" >THƯ VIỆN TRƯỜNG HỌC
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      @if(Auth::check())
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Auth::user()->avatar}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
          <ul>
            <li>
            </li>
          </ul>
        </div>
      </div> -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <div class="row">
                <div class="col-3">
                    <img src="{{Auth::user()->avatar}}" class="img-circle elevation-2 mr-3" width="40px" height="40px"alt="User Image">                    
                </div>
                <div class="col-9">
                  <b>{{Auth::user()->hoten}}</b>
                  <br>
                  <p style="font-size: 13px; color: ; ">{{Auth::user()->email}}</p>
                </div>
              </div>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profile')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Thông tin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đăng xuất</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        </nav>
        @endif
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->        
          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item has-treeview {{Request::is('users*') || Request::is('/') ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{Request::is('users*') || Request::is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>Quản lý người dùng<i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link {{Request::is('users') || Request::is('/') ? 'active' : '' }}">
                  <i class="far fa-address-book nav-icon"></i>
                  <p>List User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users.create')}}" class="nav-link {{Request::is('users/create') ? 'active' : '' }}">
                  <i class="far fa-address-card nav-icon"></i>
                  <p>Create User</p>
                </a>
              </li>     
            </ul>
          </li>
          <li class="nav-item has-treeview {{Request::is('roles*')  ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{Request::is('roles*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Phân quyền
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('roles.index')}}" class="nav-link {{Request::is('roles') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('roles.create')}}" class="nav-link {{Request::is('roles/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Roles</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href={{route('permissions.index')}} class="nav-link {{Request::is('permissions') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Quyền
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('permissions.index')}}" class="nav-link {{Request::is('permissions/index') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Permissions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('permissions.create')}}" class="nav-link {{Request::is('permissions/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Permissions</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href={{route('loaisachs.index')}} class="nav-link {{Request::is('loaisachs') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>Quản lý sách<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('loaisachs.index')}}" class="nav-link {{Request::is('loaisachs') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loại sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('dausachs.index')}}" class="nav-link {{Request::is('dausachs') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đầu sách</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-book-reader nav-icon"></i>
              <p>
                Quản lý độc giả
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('hocsinhs.index')}}" class="nav-link {{Request::is('hocsinhs') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách độc giả</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('hocsinhs.create')}}" class="nav-link {{Request::is('hocsinhs/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm độc giả</p>
                </a>
              </li>
              
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Quản lý mượn - trả
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý mượn sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý trả sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thống kê</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>