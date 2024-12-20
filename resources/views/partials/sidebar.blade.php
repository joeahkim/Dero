<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i> <span>New Booking</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.clients.create') }}">
                <i class="bi bi-card-list"></i> <span>Add a Client</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cars.available') }}">
                <i class="bi bi-car-front"></i> <span>Available Cars</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.bookings.pendingReturns') }}">
                <i class="bi bi-clock-history"></i> <span>Pending Returns</span>
            </a>
        </li>

        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-link nav-link">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </button>
            </form>
        </li>


        </li>
    </ul>
</aside>