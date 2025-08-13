<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Car Website Admin Dashboard">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/admin/images/favicon.png') }}">
    
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/icofont.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" id="theme-change" type="text/css" href="#">
    
    <style>
        /* Fix for header overlapping */
        .content-wrapper {
            padding-top: 90px; /* Adjust based on your header height */
        }
        
        /* Ensure proper spacing */
        .main-content {
            margin-left: 250px;
            padding: 50px;
            min-height: 100vh;
            transition: margin-left 0.3s ease;
        }
        
        /* Collapsed sidebar state */
        body.sidebar-collapsed .main-content {
            margin-left: 80px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0 !important;
                padding-top: 60px;
            }
        }
    </style>
    
    @stack('styles')
</head>

<body>
    <!-- Main Body -->
    <div class="page-wrapper">
        <!-- Sidebar -->
        @include('admin.partials.sidebar')
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            @include('admin.partials.header')
            
            <!-- Page Content -->
            <main class="content-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
            
            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-center">Copyright {{ date('Y') }} © CarWebsite. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

   
    <!-- Script Start -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/apexchart/control-chart-apexcharts.js') }}"></script>
    <!-- Page Specific -->
    <script src="{{ asset('assets/admin/js/nice-select.min.js') }}"></script>
    <!-- Custom Script -->
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize sidebar dropdowns
        const menuItems = document.querySelectorAll('.has-arrow');
        
        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const submenu = this.nextElementSibling;
                const parentLi = this.closest('li');
                
                // Toggle current submenu
                if (submenu.style.display === 'block') {
                    submenu.style.display = 'none';
                    parentLi.classList.remove('mm-active');
                } else {
                    submenu.style.display = 'block';
                    parentLi.classList.add('mm-active');
                }
                
                // Close other open submenus at the same level
                const siblings = parentLi.parentElement.children;
                Array.from(siblings).forEach(sibling => {
                    if (sibling !== parentLi) {
                        const siblingSubmenu = sibling.querySelector('.submenu');
                        if (siblingSubmenu) {
                            siblingSubmenu.style.display = 'none';
                            sibling.classList.remove('mm-active');
                        }
                    }
                });
            });
        });
        
        // Toggle sidebar collapse
        const toggleBtn = document.querySelector('.toggle-btn');
        if (toggleBtn) {
            toggleBtn.addEventListener('click', function() {
                const isCollapsed = document.body.classList.toggle('sidebar-collapsed');
                localStorage.setItem('sidebar-collapsed', isCollapsed);
                
                // Adjust main content margin when sidebar collapses/expands
                const mainContent = document.querySelector('.main-content');
                if (isCollapsed) {
                    mainContent.style.marginLeft = '80px'; // Adjust for collapsed sidebar
                } else {
                    mainContent.style.marginLeft = '250px'; // Default sidebar width
                }
            });
        }
        
        // User dropdown
        const userProfile = document.querySelector('.user-profile > a');
        if (userProfile) {
            userProfile.addEventListener('click', function(e) {
                e.preventDefault();
                const dropdown = this.nextElementSibling;
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
            });
            
            // Close when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.user-profile')) {
                    const dropdowns = document.querySelectorAll('.user-dropdown');
                    dropdowns.forEach(dropdown => {
                        dropdown.style.display = 'none';
                    });
                }
            });
        }
        
        // Check for saved sidebar state
        if (localStorage.getItem('sidebar-collapsed') === 'true') {
            document.body.classList.add('sidebar-collapsed');
            document.querySelector('.main-content').style.marginLeft = '80px';
        }
    });
    </script>
    
    @stack('scripts')
</body>
</html>







