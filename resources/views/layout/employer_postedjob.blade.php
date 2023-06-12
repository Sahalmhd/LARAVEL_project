<!doctype html>
<html lang="en" data-layout="horizontal" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="creative" data-bs-theme="light">

<head>

        <meta charset="utf-8">
        <title>Horizontal | Steex - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Minimal Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- Fonts css load -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

        <!-- jsvectormap css -->
        <link href="{{asset('assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css">
        
        <!--Swiper slider css-->
        <link href="{{asset('assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Layout config Js -->
        <script src="{{asset('assets/js/layout.js')}}"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css">
        <!-- custom Css-->
        <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            
            <!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="22">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
          <div class="container-fluid">

            
            <ul class="navbar-nav" id="navbar-nav">  
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('employer-posted') }}">
                        <i class=" ri-book-3-fill "></i> <span data-key="t-widgets">posted jobs</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="icon-link  nav-link" href="#">
                        <i class="bi bi-box-seam align-baseline"></i> hire a person
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
     </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="22">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="22">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>

                            <form class="app-search d-none d-md-inline-flex">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                </div>
                                
                
                        
                            </form>
                        </div>

                        <div class="d-flex align-items-center">

                            

                                    

                              

                            

                            

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-toggle="fullscreen">
                                    <i class='bi bi-arrows-fullscreen fs-lg'></i>
                                </button>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-sun align-middle fs-3xl"></i>
                                </button>
                                <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                                    <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Default (light mode)</a>
                                    <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                                    <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                                </div>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                    <i class='bi bi-bell fs-2xl'></i>
                                    <span class="position-absolute topbar-badge fs-3xs translate-middle badge rounded-pill bg-danger"><span class="notification-badge">0</span><span class="visually-hidden">unread messages</span></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                                    <div class="dropdown-head rounded-top">
                                        <div class="p-3 border-bottom border-bottom-dashed">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="mb-0 fs-lg fw-semibold"> Notifications <span class="badge bg-danger-subtle text-danger fs-sm notification-badge"> 0</span></h6>
                                                    <p class="fs-md text-muted mt-1 mb-0">You have <span class="fw-semibold notification-unread">0</span> unread messages</p>
                                                </div>
                                                <div class="col-auto dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="link-secondary fs-md"><i class="bi bi-three-dots-vertical"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">All Clear</a></li>
                                                        <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                                        <li><a class="dropdown-item" href="#">Archive All</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="py-2 ps-2" id="notificationItemsTabContent">
                                        
                                      
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/32/avatar-1.jpg')}}" alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Richard Marshall</span>
                                            <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">Founder</span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <h6 class="dropdown-header">Welcome Richard!</h6>
                                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                           
                                    <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- removeNotificationModal -->
            <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                        </div>
                        <div class="modal-body p-md-5">
                            <div class="text-center">
                                <div class="text-danger">
                                    <i class="bi bi-trash display-4"></i>
                                </div>
                                <div class="mt-4 fs-base">
                                    <h4 class="mb-1">Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                            </div>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            
            
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                
                <div class="page-content">
                    <div class="container-fluid">
                    
                        
                        
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">posted jobs</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                    <li class="breadcrumb-item active">Customers</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center flex-wrap gap-3">
                    <div class="flex-grow-1">
                        <h3 class="card-title mb-0">job List</h3>
                    </div>
                    <div>
                        <div class="d-flex flex-wrap gap-2">
                            <form method="POST" action="{{ route('employer-post') }}">
                                @csrf <!-- Add CSRF protection -->
                            
                                <button type="submit" class="btn btn-primary add-btn" data-bs-toggle="modal" data-bs-target="#showModal">
                                  <i class="bi bi-plus-circle align-baseline me-1"></i> Add NEW JOB
                                </button>
                              </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->

<div class="row" id="customer-list">
    <div class="col-xxl-12">
        <div class="card">
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-xl-4">
                        <div class="search-box">
                            <input type="text" class="form-control search" placeholder="Search customer, email etc...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4">
                        <div>
                            <select class="form-control" id="idStatus" data-choices data-choices-search-false>
                                <option value="all">All Select</option>
                                <option value="Active">Active</option>
                                <option value="Unactive">Unactive</option>
                                <option value="Block">Block</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4">
                        <input type="text" class="form-control" id="datepicker-range" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" placeholder="Select date">
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <button class="btn btn-subtle-primary w-100" onclick="filterData();"><i class="bi bi-funnel align-baseline me-1"></i> Filter</button>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
               

<div class="table-responsive table-card">
    <table class="table table-nowrap mb-0">
        <thead class="table-light">
            <tr>
                
                <th scope="col">POSITION</th>
                <th scope="col">Posted Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              
                <td>LARAVEL EVELOPER</td>
                <td>07 Oct, 2021</td>
                <td><span class="badge bg-success">active</span></td>
                <td>
                    <button type="button" class="btn btn-sm btn-light">Details</button>
                </td>
            </tr>
           
           
            
        </tbody>
    </table>
</div>


                <div class="noresult" style="display: none">
                    <div class="text-center py-4">
                        <i class="ph-magnifying-glass fs-1 text-primary"></i>
                        <h5 class="mt-2">Sorry! No Result Found</h5>
                        <p class="text-muted mb-0">We've searched more than 150+ customers We did not find any customers for you search.</p>
                    </div>
                </div>
                <div class="align-items-center mt-4 justify-content-between row text-center text-sm-start" id="pagination-element">
                    <div class="col-sm">
                        <div class="text-muted">
                            Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">13</span> Results
                        </div>
                    </div>
                    <div class="col-sm-auto  mt-3 mt-sm-0">
                        <div class="pagination-wrap hstack gap-2">
                            <a class="page-item pagination-prev disabled" href="javascript:void(0)">Previous</a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="javascript:void(0)">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end col-->
   
</div><!--end row-->

                
                    
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Steex.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <!-- JAVASCRIPT -->
       <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
       <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
       <script src="{{asset('assets/js/plugins.js')}}"></script>

       <!-- Vector map-->
       <script src="{{asset('assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
       <script src="{{asset('assets/libs/jsvectormap/maps/world-merc.js')}}"></script>
       
       <!--Swiper slider js-->
       <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>
       
       <script src="{{asset('assets/libs/list.js/list.min.js')}}"></script>
       
       <!-- Dashboard init -->
       <script src="{{asset('assets/js/pages/dashboard-ecommerce.init.js')}}"></script>
       
       <!-- App js -->
       <script src="{{asset('assets/js/app.js')}}"></script>
           <!-- sweetalert2 js -->
    <script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <!-- ckeditor -->
    <script src="{{asset('assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>
           <!-- ecommerce-customer -->
    <script src="{{asset('assets/js/pages/ecommerce-customer.init.js')}}"></script>


    </body>


<!-- Mirrored from themesbrand.com/steex/layouts/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2023 07:47:04 GMT -->
</html>