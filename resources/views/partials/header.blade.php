<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ url('/admin') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/favicon.jpg') }}" alt="">
            <span class="d-none d-lg-block">Derrique H&T</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <!-- <img src="{{ asset('assets/img/ceo.jpg') }}" alt="Profile" class="rounded-circle"> -->
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ auth()->user()->role }}</h6>
                        <span>{{ auth()->user()->email }}</span>
                    </li>
                    <!-- <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ url('/profile') }}">
                            <i class="bi bi-person"></i> <span>My Profile</span>
                        </a>
                    </li> -->
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <i class="bi bi-box-arrow-right"></i> <span>Sign Out</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>