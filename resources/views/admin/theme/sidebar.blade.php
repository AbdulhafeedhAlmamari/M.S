    <!-- Sidebar -->
    <ul class="pr-0 navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="">
                Management Users
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">


        <!-- Nav Item - Dashboard -->
        <li class="nav-item  {{ request()->is('admin/section') ? 'active' : '' }}">
            <a class="nav-link text-right" href="{{ route('admin.section') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>الاقسام</span></a>
        </li>


        <!-- Nav Item - Utilities Collapse Menu -->
        @can('read-user')
            <li class="nav-item {{ request()->is('admin/user*') ? 'active' : '' }}">
                <a class="nav-link text-right" href="{{ route('user.index') }}">
                    <i class="fas fa-users"></i>
                    <span>المستخدمون</span>
                </a>
            </li>
        @endcan



        @can('read-user')
            <!-- Nav Item - Charts -->
            <li class="nav-item {{ request()->is('admin/role*') ? 'active' : '' }}">
                <a class="nav-link text-right" href="{{ route('role.index') }}">
                    <i class="fas fa-table"></i>
                    <span>الأدوار</span></a>
            </li>
        @endcan
        @can('read-user')
            <!-- Nav Item - Tables -->
            <li class="nav-item {{ request()->is('admin/permission*') ? 'active' : '' }}">
                <a class="nav-link text-right" href="{{ route('permissions') }}">
                    <i class="fas fa-folder"></i>
                    <span>الصلاحيات</span></a>
            </li>
        @endcan



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
