<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>Form Basics | Darkone - Dark Admin & UI Kit Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Darkone: An advanced, fully responsive admin dashboard template packed with features to streamline your analytics and management needs." />
    <meta name="author" content="StackBros" />
    <meta name="keywords"
        content="Darkone, admin dashboard, responsive template, analytics, modern UI, management tools" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#ffffff">

    <!-- Gridjs Plugin css -->
    <link href="{{ asset('assets/vendor/gridjs/theme/mermaid.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Google Font Family link -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&amp;display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Vendor css -->
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
</head>

<body>

    <!-- START Wrapper -->
    <div class="app-wrapper">

        <!-- Topbar Start -->
        <header class="app-topbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="d-flex align-items-center gap-2">
                        <!-- Menu Toggle Button -->
                        <div class="topbar-item">
                            <button type="button" class="button-toggle-menu topbar-button">
                                <iconify-icon icon="solar:hamburger-menu-outline"
                                    class="fs-24 align-middle"></iconify-icon>
                            </button>
                        </div>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block me-auto">
                            <div class="position-relative">
                                <input type="search" class="form-control" placeholder="admin,widgets..."
                                    autocomplete="off" value="">
                                <iconify-icon icon="solar:magnifer-outline" class="search-widget-icon"></iconify-icon>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <!-- Theme Color (Light/Dark) -->
                        <div class="topbar-item">
                            <button type="button" class="topbar-button" id="light-dark-mode">
                                <iconify-icon icon="solar:moon-outline"
                                    class="fs-22 align-middle light-mode"></iconify-icon>
                                <iconify-icon icon="solar:sun-2-outline"
                                    class="fs-22 align-middle dark-mode"></iconify-icon>
                            </button>
                        </div>

                        <!-- Notification -->
                        <div class="dropdown topbar-item">
                            <button type="button" class="topbar-button position-relative"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <iconify-icon icon="solar:bell-bing-outline" class="fs-22 align-middle"></iconify-icon>
                                <span
                                    class="position-absolute topbar-badge fs-10 translate-middle badge bg-danger rounded-pill">5<span
                                        class="visually-hidden">unread messages</span></span>
                            </button>
                            <div class="dropdown-menu py-0 dropdown-lg dropdown-menu-end"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-2 border-bottom bg-light bg-opacity-50">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> Notifications (5)</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 250px;">
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom text-wrap">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                                    class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-1" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0"><span class="fw-medium">Sally Bieber </span>started
                                                    following you. Check out their profile!"</span></p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-2">
                                                    <span
                                                        class="avatar-title text-bg-info fw-semibold fs-20 rounded-circle">
                                                        G
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-medium">Gloria Chambers</p>
                                                <p class="mb-0 text-wrap">
                                                    mentioned you in a comment: '@admin, check this out!
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('assets/images/users/avatar-3.jpg') }}"
                                                    class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-3" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-medium">Jacob Gines</p>
                                                <p class="mb-0 text-wrap">
                                                    Answered to your comment on the cash flow forecast's graph 🔔.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-2">
                                                    <span
                                                        class="avatar-title bg-soft-warning text-warning fs-20 rounded-circle">
                                                        <iconify-icon icon="solar:leaf-outline"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-medium text-wrap">A new system update is available.
                                                    Update now for the latest features.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item p-2 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('assets/images/users/avatar-5.jpg') }}"
                                                    class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-5" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-medium">Shawn Bunch</p>
                                                <p class="mb-0 text-wrap">
                                                    commented on your post: 'Great photo!
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center p-2">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm">View All Notification
                                        <i class="bx bx-right-arrow-alt ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- User -->
                        <div class="dropdown topbar-item">
                            <a type="button" class="topbar-button" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle" width="32"
                                        src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="avatar-3">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome!</h6>

                                <a class="dropdown-item" href="#">
                                    <iconify-icon icon="solar:user-outline"
                                        class="align-middle me-2 fs-18"></iconify-icon><span class="align-middle">My
                                        Account</span>
                                </a>

                                <a class="dropdown-item" href="#">
                                    <iconify-icon icon="solar:wallet-outline"
                                        class="align-middle me-2 fs-18"></iconify-icon><span
                                        class="align-middle">Pricing</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <iconify-icon icon="solar:help-outline"
                                        class="align-middle me-2 fs-18"></iconify-icon><span
                                        class="align-middle">Help</span>
                                </a>
                                <a class="dropdown-item" href="auth-lock-screen.html">
                                    <iconify-icon icon="solar:lock-keyhole-outline"
                                        class="align-middle me-2 fs-18"></iconify-icon><span class="align-middle">Lock
                                        screen</span>
                                </a>

                                <div class="dropdown-divider my-1"></div>

                                <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}">
                                    <iconify-icon icon="solar:logout-3-outline"
                                        class="align-middle me-2 fs-18"></iconify-icon><span
                                        class="align-middle">Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Topbar End -->

        <!-- App Menu Start -->
        <div class="app-sidebar">
            <!-- Sidebar Logo -->
            <div class="logo-box">
                <a href="index.html" class="logo-dark">
                    <img src="{{ asset('assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                    <img src="{{ asset('assets/images/logo-dark.png') }}" class="logo-lg" alt="logo dark">
                </a>

                <a href="index.html" class="logo-light">
                    <img src="{{ asset('assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                    <img src="{{ asset('assets/images/logo-light.png') }}" class="logo-lg" alt="logo light">
                </a>
            </div>

            <div class="scrollbar" data-simplebar>

                <ul class="navbar-nav" id="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <span class="nav-icon">
                                <iconify-icon icon="mingcute:home-3-line"></iconify-icon>
                            </span>
                            <span class="nav-text"> Dashboard </span>
                            <span class="badge bg-primary badge-pill text-end">03</span>
                        </a>
                    </li>

                    <li class="menu-title">Foods Section</li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#categoryLayout" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="categoryLayout">
                            <span class="nav-icon">
                                <iconify-icon icon="mingcute:layout-line"></iconify-icon>
                            </span>
                            <span class="nav-text"> Foods Data </span>
                        </a>
                        <div class="collapse" id="categoryLayout">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('add.food.view') }}">
                                        Add Food</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('view.foods') }}">
                                        View Foods list</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title">Categories Section</li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#categoryLayout" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="categoryLayout">
                            <span class="nav-icon">
                                <iconify-icon icon="mingcute:layout-line"></iconify-icon>
                            </span>
                            <span class="nav-text"> Foods Category </span>
                        </a>
                        <div class="collapse" id="categoryLayout">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('add.food.view') }}">
                                        Add Food Category</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{ route('view.foods') }}">
                                        View Foods Categories list</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

        <!-- App Menu End -->

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">





            @yield('content')




            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; Darkone by StackBros.</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->


    </div>
    <!-- END Wrapper -->

    @yield('scripts')

    <!-- Vendor Javascript -->
    <script src="{{ asset('/assets/js/vendor.min.js') }}"></script>

    <!-- App Javascript -->
    <script src="{{ asset('/assets/js/app.js') }}"></script>


</body>

</html>
