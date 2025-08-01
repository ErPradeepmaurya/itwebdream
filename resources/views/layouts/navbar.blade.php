<!-- Navigation -->
<nav class="navbar navbar-dark nav-main sticky-top mt-2">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <a class="navbar-brand text-white fw-bold" href="{{ route('welcome') }}">
            <img src="{{ asset('asset/main/image/itwebdream-logo2.png') }}" alt="logo" width="180px">
        </a>

        <!-- Center Nav for Desktop -->
        <!-- Navbar Wrapper -->
        <div class="d-none d-lg-flex justify-content-center flex-grow-1">
            <ul class="navbar-nav flex-row gap-3 text-uppercase nav-menu main-menu">
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('aboutus') }}">About Us</a>
                </li>

                <!-- Services Dropdown -->
                <li class="nav-item dropdown position-relative">
                    <a class="nav-link fw-bold dropdown-toggle" href="#" id="servicesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu text-start text-light" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item text-light" href="{{ route('comming-soon') }}">Web Development</a>
                        </li>
                        <li><a class="dropdown-item text-light" href="{{ route('comming-soon') }}">Mobile App
                                Development</a>
                        </li>
                        <li><a class="dropdown-item text-light" href="{{ route('web-development') }}">Custom
                                Software</a></li>
                        <li><a class="dropdown-item text-light" href="{{ route('uiux-design') }}">UI/UX Design</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-bold" href="#technologies">Technologies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="#contact">Contact</a>
                </li>
            </ul>
        </div>


        <!-- Right: Login button -->
        <div class="d-none d-lg-block nav-login">
            <a href="#">Login</a>
        </div>


        <!-- Offcanvas Toggle Button (Mobile) -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Offcanvas Sidebar for Mobile -->
<div class="offcanvas offcanvas-end mobile-nav-bg" tabindex="-1" id="mobileNav">
    <div class="offcanvas-header">
        {{-- <h5 class="offcanvas-title fw-bold">Menu</h5> --}}
        <a class="navbar-brand text-white fw-bold" href="{{ route('welcome') }}">
            <img src="{{ asset('asset/main/image/itwebdream-logo2.png') }}" alt="logo" width="180px">
        </a>
        <button type="button" class="btn-close btn-close text-reset" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav text-uppercase py-5">
            <li class="nav-item">
                <a class="nav-link fw-bold py-3" href="{{ route('aboutus') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold py-3" href="#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold py-3" href="#technologies">Technologies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold py-3" href="{{ route('faq') }}">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold py-3" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</div>
