<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <div>
            <a class="dropdown-item" href="{{ route('logout') }}"
              >Welcome
                {{auth()->user()->name}}
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @csrf
            </form>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{route('dahsboard')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            CRUD Action
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('posts.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Posts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a href="{{route('categories.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
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
