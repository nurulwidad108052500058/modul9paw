
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bootstrap Clone</title>

    @vite('resources/sass/app.scss')
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg bg-purple" data-bs-theme="dark">
        <div class="container py-2 px-4">

            <a href="#" class="navbar-brand mb-0 h1">
                <img class="img-fluid"
                    src="{{ Vite::asset('resources/images/logo-white.svg') }}"
                    alt="logo" style="width: 40px;">
            </a>

            <button type="button" class="navbar-toggler"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end bg-purple"
                id="offcanvasNavbar">

                <div class="offcanvas-header pb-0 px-4">
                    <h5 class="offcanvas-title text-white"
                        id="offcanvasNavbarLabel">
                        Bootstrap
                    </h5>

                    <button type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="offcanvas">
                    </button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#themes">Themes</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#icons">Icons</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <main id="main">

        <!-- Hero Section -->
        <section id="home" class="container py-5 mt-5">
            <div class="row align-items-center py-5">

                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold">
                        Build fast, responsive sites with Bootstrap
                    </h1>

                    <p class="lead text-secondary mt-3">
                        Powerful, extensible, and feature-packed frontend toolkit.
                    </p>

                    <a href="#features" class="btn btn-primary btn-lg mt-3">
                        Get Started
                    </a>
                </div>

                <div class="col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="{{ Vite::asset('resources/images/main.svg') }}"
                        class="img-fluid" alt="Bootstrap">
                </div>

            </div>
        </section>

        <!-- Features -->
        <section id="features" class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Features</h2>
                <p class="text-secondary">Explore Bootstrap features.</p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card h-100 p-3">
                        <div class="card-body">
                            <i class="bi bi-lightning-charge fs-1"></i>
                            <h5 class="card-title mt-3">Fast</h5>
                            <p class="card-text">
                                Build websites quickly and efficiently.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 p-3">
                        <div class="card-body">
                            <i class="bi bi-phone fs-1"></i>
                            <h5 class="card-title mt-3">Responsive</h5>
                            <p class="card-text">
                                Create responsive layouts for all devices.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 p-3">
                        <div class="card-body">
                            <i class="bi bi-palette fs-1"></i>
                            <h5 class="card-title mt-3">Customizable</h5>
                            <p class="card-text">
                                Customize your website with ease.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Themes -->
        <section id="themes" class="container py-5">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Bootstrap Themes</h2>
            </div>

            <div class="text-center">
                <img src="{{ Vite::asset('resources/images/bs-themes.png') }}"
                    class="img-fluid" alt="Bootstrap Themes">
            </div>
        </section>

        <!-- Icons -->
        <section id="icons" class="container py-5">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Bootstrap Icons</h2>
            </div>

            <div class="text-center">
                <img src="{{ Vite::asset('resources/images/bs-icons.png') }}"
                    class="img-fluid" alt="Bootstrap Icons">
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer id="footer" class="container-fluid py-4 bg-light">
        <div class="container text-center">
            <a href="#home" class="text-decoration-none">
                <img src="{{ Vite::asset('resources/images/logo-black.svg') }}"
                    alt="Bootstrap Logo" width="40">
            </a>

            <p class="mt-3 mb-0">
                Bootstrap Clone - Praktikum Version Control System
            </p>
        </div>
    </footer>

    @vite('resources/js/app.js')

</body>
</html>
