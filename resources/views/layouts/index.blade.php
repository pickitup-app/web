<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AdminLTE v4 | Dashboard</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">

    {{-- Import PickItUp Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/adminpanel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adduser.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pickupstatus.css') }}">
    <link rel="stylesheet" href="{{ asset('css/userdata.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-seepoints.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropoffpoint.css') }}">
    <link rel="stylesheet" href="{{ asset('css/trashinfo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pickupschedule.css') }}">
    <link rel="stylesheet" href="{{ asset('css/urgentpickup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assigndriver.css') }}">


    {{-- Import Font Baloo Bhai 2 & Be Vietnam Pro --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400..800&family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->
        <nav class="app-header navbar navbar-expand"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav text-light">
                    <li class="nav-item hamburger"> <a class="nav-link link-hamburger" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list icon-menu"></i> </a> </li>
                    <li class="nav-item d-none d-md-block wrap-icon"> <a href="#" class="nav-link"><img src="{{ asset('img/Logo-navbar.png')}}" alt="" class="piu-icon"></a> </li>
                    <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link"><img src="{{asset('img/piu-title.png')}}" alt="" class="piu-title"></a> </li>
                </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                    <li class="nav-item"> <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i class="bi bi-search"></i> </a> </li> <!--end::Navbar Search--> 
                    <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu profile-wrap"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="{{asset('img/dummyprofile.png')}}" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">John David</span> <img src="{{ asset('img/arrow-down.svg') }}" alt="" class="arrow-down"> </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                            <li class="user-header bg-custom-primary"> <img src="{{ asset('img/dummyprofile.png') }}" class="rounded-circle shadow" alt="User Image">
                                <p>
                                    John David - Web Developer
                                    <small>Member since Nov. 2023</small>
                                </p>
                            </li> <!--end::User Image--> <!--begin::Menu Body-->
                            <li class="user-body bg-light"> <!--begin::Row-->
                                <div class="row">
                                    <div class="col-4 text-center"> <a href="#">Followers</a> </div>
                                    <div class="col-4 text-center"> <a href="#">Sales</a> </div>
                                    <div class="col-4 text-center"> <a href="#">Friends</a> </div>
                                </div> <!--end::Row-->
                            </li> <!--end::Menu Body--> <!--begin::Menu Footer-->
                            <li class="user-footer bg-light"> <a href="#" class="btn btn-default btn-flat">Profile</a> <a href="#" class="btn btn-default btn-flat float-end">Sign out</a> </li> <!--end::Menu Footer-->
                        </ul>
                    </li> <!--end::User Menu Dropdown-->
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header--> <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> 
                <!--begin::Brand Link--> 
                <a href="./index.html" class="brand-link"> 
                    <!--begin::Brand Image--> 
                    <img src="{{ asset('img/dummyprofile.png') }}" alt="AdminLTE Logo" class="opacity-75 shadow profile-side"> 
                    <!--end::Brand Image--> 
                    <!--begin::Brand Text--> 
                    <span class="brand-text fw-light">
                        John David
                        <span class="online-tag"><img src="{{ asset('img/online-dot.svg') }}" alt=""> <p>Online</p></span>
                    </span> <!--end::Brand Text-->
                    
                </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <div class="container-fluid sidebar-general">
                        <h2 class="text-light">General</h2>
                        
                    </div>
                    <hr style="border: 2px solid #628A4C; opacity:1" class="m-0">
                    <ul class="nav sidebar-menu flex-column sidebar-custom" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item active"> 
                            <a href="./generate/theme.html" class="nav-link"> 
                                <img src="{{ asset('img/dashboard/dashboard.svg') }}" alt="">
                                <p>Dashboard</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="./generate/theme.html" class="nav-link">
                                <img src="{{ asset('img/dashboard/user.svg') }}" alt="">
                                <p>User Data</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="./generate/theme.html" class="nav-link">
                                <img src="{{ asset('img/dashboard/healthtruck.svg') }}" alt="">
                                <p>Driver Data</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="./generate/theme.html" class="nav-link">
                                <img src="{{ asset('img/dashboard/clock.svg') }}" alt="">
                                <p>Pick-Up Schedule</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="./generate/theme.html" class="nav-link">
                                <img src="{{ asset('img/dashboard/bell.svg') }}" alt="">
                                <p>Urgent Pick-Up</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="./generate/theme.html" class="nav-link">
                                <img src="{{ asset('img/dashboard/locations.svg') }}" alt="">
                                <p>Drop-Off Point</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="./generate/theme.html" class="nav-link">
                                <img src="{{ asset('img/dashboard/status.svg') }}" alt="">
                                <p>Pick-Up Status</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="./generate/theme.html" class="nav-link"> 
                                <img src="{{ asset('img/dashboard/calculator.svg') }}" alt="">
                                <p>Trash Info</p>
                            </a> 
                        </li>
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar--> <!--begin::App Main-->
        <main class="app-main"> <!--begin::App Content Header-->
        
                <div class="container-fluid d-flex justify-content-center align-items-center content-wrapper m-0 p-0"> <!--begin::Row-->
                    @yield('content')
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('js/adminlte.js') }}"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!-- OPTIONAL SCRIPTS --> <!-- sortablejs -->
</body><!--end::Body-->

</html>