<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion pr-0" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">admin panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span> داشبورد </span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        کاربران
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.users.index') }}" data-toggle="collapse"
           data-target="#collapseUsers" aria-expanded="true"
           aria-controls="collapsePages">
            <i class="fas fa-fw fa-users"></i>
            <span> کاربران </span>
        </a>
        <div id="collapseUsers" class="collapse
        {{ request()->is('admin-panel/managment/users*') ? 'show' : ''}}
        {{ request()->is('admin-panel/managment/roles*') ? 'show' : ''}}
        {{ request()->is('admin-panel/managment/permissions*') ? 'show' : ''}}
        " aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('admin-panel/managment/users*') ? 'active' : ''}}"
                   href="{{ route('admin.users.index') }}">لیست کاربران</a>
                <a class="collapse-item {{ request()->is('admin-panel/managment/roles*') ? 'active' : ''}}"
                   href="{{ route('admin.roles.index') }}">گروه های کاربری</a>
                <a class="collapse-item {{ request()->is('admin-panel/managment/permissions*') ? 'active' : ''}}"
                   href="{{ route('admin.permissions.index') }}">پرمیژن ها</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        فروشگاه
    </div>

    <!-- Nav Item - Brand -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.brands.index')}}">
            <i class="fas fa-store"></i>
            <span> برند ها </span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.products.index')}}" data-toggle="collapse"
           data-target="#collapseProducts"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-cart-plus"></i>
            <span>  محصولات </span>
        </a>
        <div id="collapseProducts" class="collapse
      {{ request()->is('admin-panel/managment/products*') ? 'show' : ''}}
      {{ request()->is('admin-panel/managment/categories*') ? 'show' : ''}}
      {{ request()->is('admin-panel/managment/attributes*') ? 'show' : ''}}
      {{ request()->is('admin-panel/managment/tags*') ? 'show' : ''}}
      {{ request()->is('admin-panel/managment/comments*') ? 'show' : ''}}
      " aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('admin-panel/managment/products*') ? 'active' : ''}}"
                   href="{{route('admin.products.index')}}">محصولات</a>
                <a class="collapse-item {{ request()->is('admin-panel/managment/categories*') ? 'active' : ''}}"
                   href="{{route('admin.categories.index')}}">دسته بندی ها</a>
                <a class="collapse-item {{ request()->is('admin-panel/managment/attributes*') ? 'active' : ''}}"
                   href="{{route('admin.attributes.index')}}">ویژگی ها</a>
                <a class="collapse-item {{ request()->is('admin-panel/managment/tags*') ? 'active' : ''}}"
                   href="{{route('admin.tags.index')}}">تگ ها</a>
                <a class="collapse-item {{ request()->is('admin-panel/managment/comments*') ? 'active' : ''}}"
                   href="{{route('admin.comments.index')}}">کامنت ها</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        سفارشات
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.orders.index') }}" data-toggle="collapse"
           data-target="#collapseOrders"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-folder"></i>
            <span>  سفارشات </span>
        </a>
        <div id="collapseOrders" class="collapse
        {{ request()->is('admin-panel/managment/orders*') ? 'show' : ''}}
        {{ request()->is('admin-panel/managment/transactions*') ? 'show' : ''}}
        {{ request()->is('admin-panel/managment/coupons*') ? 'show' : ''}}
        " aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('admin-panel/managment/orders*') ? 'active' : ''}}"
                   href="{{ route('admin.orders.index') }}">سفارشات</a>
                <a class="collapse-item {{ request()->is('admin-panel/managment/transactions*') ? 'active' : ''}}"
                   href="{{ route('admin.transactions.index') }}">تراکنش ها</a>
                <a class="collapse-item {{ request()->is('admin-panel/managment/coupons*') ? 'active' : ''}}"
                   href="{{ route('admin.coupons.index') }}">کوپن ها</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        تنظیمات
    </div>

    <!-- Nav Item - Banners -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.banners.index')}}">
            <i class="fas fa-image"></i>
            <span> بنرها </span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
