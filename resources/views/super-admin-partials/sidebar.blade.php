<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('super-admin.dashboard') }}">
                <i class="bi bi-grid"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('super-admin.cars.create') }}">
                <i class="bi bi-card-list"></i> <span>Add a Car</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('super-admin.cars.all-cars') }}">
                <i class="bi bi-car-front"></i> <span>All Cars</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('super-admin.cars.pending-returns') }}">
                <i class="bi bi-clock-history"></i> <span>Pending Returns</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('super-admin.admins.create') }}" class="nav-link">
                <i class="bi bi-person-plus"></i>
                <span>Create Admin</span>
            </a>
        </li>
        <li>
            <a href="{{ route('super-admin.clients.allclients') }}" class="nav-link">
                <i class="bi bi-person"></i>
                <span>All Clients</span>
            </a>
        </li>

        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-link nav-link text-danger d-flex align-items-center gap-2">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </button>
            </form>
        </li>


    </ul>
</aside>