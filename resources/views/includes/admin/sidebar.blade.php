<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Admin Panel</li>
        <li class="nav-item">
            <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Post
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.post.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All posts</p>
                        <span style="{{ App\Models\Post::all()->count() == 0 ? 'display: none;' : '' }}" class="badge badge-info right">{{ App\Models\Post::all()->count() > 99 ? '99+' : App\Models\Post::all()->count() }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.post.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Create new</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.post.trash') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Trash</p>
                        <span style="{{ App\Models\Post::onlyTrashed()->count() == 0 ? 'display: none;' : '' }}" class="badge badge-info right">{{ App\Models\Post::onlyTrashed()->count() > 99 ? '99+' : App\Models\Post::onlyTrashed()->count() }}</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-user"></i>
                <p>
                    User
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All users</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
