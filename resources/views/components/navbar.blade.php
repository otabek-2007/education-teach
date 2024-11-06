    <!-- Navbar Start -->
    <div class="container-fluid border-bottom bg-light">
        <!-- Topbar Start -->
        <div class="container topbar bg-primary d-none d-lg-block py-2" style="border-radius: 0 40px;">
            <div class="d-flex justify-content-between align-items-center">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">{{ $settings->location }}</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i> <a href="mailto:Email@Example.com" class="text-white">{{ $settings->email }}</a></small>
                    <small><i class="fas fa-phone-alt me-2 text-secondary"></i> <a href="tel:+123456789" class="text-white">+{{ $settings->phone }}</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="#" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-secondary"></i></a>
                    <a href="#" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-twitter text-secondary"></i></a>
                    <a href="#" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-instagram text-secondary"></i></a>
                    <a href="#" class="btn btn-light btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-secondary"></i></a>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="container px-0">
            <nav class="navbar navbar-expand-xl navbar-light py-3">
                <a href="{{ route('index') }}" class="navbar-brand">
                    <img src="{{ asset('./img/logo.png') }}" height="80px" alt="Site Logo">
                    <!-- Optionally use a text-based logo -->
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('index') }}" class="nav-item nav-link active">{{ __('messages.home') }}</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">{{ __('messages.about') }}</a>

                        <!-- Dropdown Menu for Courses -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('messages.courses') }}</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">English Grammar</a>
                                <a href="#" class="dropdown-item">Speaking Practice</a>
                                <a href="#" class="dropdown-item">Writing Skills</a>
                                <a href="#" class="dropdown-item">Listening Skills</a>
                            </div>
                        </div>

                        <!-- Dropdown Menu for Resources -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('messages.resources') }}</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Blog</a>
                                <a href="#" class="dropdown-item">E-books</a>
                                <a href="#" class="dropdown-item">Tutorials</a>
                                <a href="#" class="dropdown-item">Webinars</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">

                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('messages.language') }}</a>
                            <div class="dropdown-menu">
                                <a href="{{ route('change.lang', ['locale' => 'en']) }}" class="dropdown-item">English</a>
                                <a href="{{ route('change.lang', ['locale' => 'ru']) }}" class="dropdown-item">Русский</a>
                                <a href="{{ route('change.lang', ['locale' => 'uz']) }}" class="dropdown-item">O'zbek</a>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">{{ __('messages.contact') }}</a>
                    </div>

                    <!-- Search Bar -->
                    <form class="d-flex ms-3">
                        <input class="form-control me-2" type="search" placeholder="Search courses" aria-label="Search">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->
    </div>
    <!-- Navbar End -->