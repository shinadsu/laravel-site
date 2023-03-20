<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      
      <li class="nav-header">ADMIN PANEL</li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            POSTS
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right"></span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('admin.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>SHOW POSTS</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.create')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>CREATE POSTS</p>
            </a>
          </li>
  </nav>

