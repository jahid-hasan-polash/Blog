      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="{!! Menu::isActiveRoute('dashboard') !!}">
              <a href="{!!  route( 'dashboard') !!}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>

           <!-- Demo CRUD  -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Blog</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('blog.index') }}"><i class="fa fa-circle-o"></i>Index</a></li>
                <li><a href="{{ route('blog.create') }}"><i class="fa fa-circle-o"></i>Create Blog</a></li>
              </ul>
            </li>
            
            <li class="{!! Menu::isActiveRoute('user.profile') !!}">
              <a href="{!!  route( 'user.profile') !!}">
                <i class="fa fa-dashboard"></i> <span>Profile</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside> 