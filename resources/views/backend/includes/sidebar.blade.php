<!-- Sidebar Navigation -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <a href="admin_dashboard.html" class="sidebar-brand">Mo<span>Lat</span> Admin</a>
    </div>
    <ul class="sidebar-menu">
        <li><a href="{{ route('admin.dashboard') }}"
                class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}"><i
                    class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li><a href="#"><i class="fas fa-book"></i> Books</a></li>
        <li><a href="{{ route('admin.categories.index') }}"
                class="{{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}"><i
                    class="fas fa-th-list"></i> Categories</a></li>
        <li><a href="#"><i class="fas fa-pen-nib"></i> Authors</a></li>
        <li><a href="#"><i class="fas fa-building"></i> Publishers</a></li>
        <li><a href="#"><i class="fas fa-shopping-cart"></i> Orders <span
                    class="badge bg-danger ms-auto">5</span></a></li>
        <li><a href="#"><i class="fas fa-users"></i> Customers</a></li>
        <li><a href="#"><i class="fas fa-calendar-alt"></i> Event Management</a></li>
        <li><a href="#"><i class="fas fa-newspaper"></i> Blog & News</a></li>
        <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
        <li class="mt-4"><a href="#" class="text-danger"><i class="fas fa-sign-out-alt"></i>
                Logout</a>
        </li>
    </ul>
</aside>
