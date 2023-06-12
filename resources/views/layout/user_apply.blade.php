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
            
    <!-- dropzone css -->
    <link rel="stylesheet" href="{{asset('assets/libs/dropzone/dropzone.css')}}" type="text/css">


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
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="ph-paint-brush-broad"></i> <span data-key="t-widgets">Widgets</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel"  >
                        <i class="bi bi-share"></i> <span data-key="t-multi-level">Multi Level</span>
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



                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Form Layout</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Layout</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        

                        

<form action="javascript:void(0);">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="firstNameinput" class="form-label">First Name</label>
                <input type="text" class="form-control" placeholder="Enter your firstname" id="firstNameinput">
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="lastNameinput" class="form-label">Last Name</label>
                <input type="text" class="form-control" placeholder="Enter your lastname" id="lastNameinput">
            </div>
        </div><!--end col-->

        <div class="col-6">
            <div class="mb-3">
                <label for="phonenumberInput" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" placeholder="+(91) 1234567890" id="phonenumberInput">
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="emailidInput" class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="example@gamil.com" id="emailidInput">
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="firstNameinput" class="form-label">QUALIFICATION</label>
                <input type="text" class="form-control" placeholder="Enter your QUALIFICATION" id="firstNameinput">
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="firstNameinput" class="form-label">EXPERIENCE</label>
                <input type="number" class="form-control" placeholder="EXPERIENCE" i>
            </div>
        </div><!--end col-->
        <div class="col-12">
            <div class="mb-3">
                <label for="address1ControlTextarea" class="form-label">Address</label>
                <input type="text" class="form-control" placeholder="Address 1" id="address1ControlTextarea">
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="citynameInput" class="form-label">City</label>
                <input type="email" class="form-control" placeholder="Enter your city" id="citynameInput">
            </div>
        </div><!--end col-->
        <div class="col-6">
            <div class="mb-3">
                <label for="ForminputState" class="form-label">State</label>
                <select id="ForminputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
        </div><!--end col-->
       
    </div><!--end row-->
</form>

<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">UPLOAD YOUR CV</h4>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="dropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple="multiple">
                    </div>
                    <div class="dz-message needsclick">
                        <div class="mb-3">
                            <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                        </div>

                        <h4>Drop files here or click to upload.</h4>
                    </div>
                </div>

                <ul class="list-unstyled mb-0" id="dropzone-preview">
                    <li class="mt-2" id="dropzone-preview-list">
                        <!-- This is used as the file preview template -->
                        <div class="border rounded">
                            <div class="d-flex p-2">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm bg-light rounded">
                                        <img data-dz-thumbnail class="img-fluid rounded d-block" src="assets/images/new-document.png" alt="Dropzone-Image" >
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="pt-1">
                                        <h5 class="fs-md mb-1" data-dz-name>&nbsp;</h5>
                                        <p class="fs-sm text-muted mb-0" data-dz-size></p>
                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 ms-3">
                                    <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <br>
                <div class="col-lg-12">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div><!--end col-->
                <!-- end dropzon-preview -->
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->

         
                    
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
       <!-- apexcharts -->
       <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
       
       <!-- Vector map-->
       <script src="{{asset('assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
       <script src="{{asset('assets/libs/jsvectormap/maps/world-merc.js')}}"></script>
       
       <!--Swiper slider js-->
       <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>
       
       <script src="{{asset('assets/libs/list.js/list.min.js')}}"></script>
       
       <!-- Dashboard init -->
       <script src="{{asset('assets/js/pages/dashboard-ecommerce.init.js')}}"></script>


       <script src="{{asset('assets/libs/dropzone/dropzone-min.js')}}"></script>

    <script src="{{asset('assets/js/pages/form-file-upload.init.js')}}"></script>
       
       <!-- App js -->
       <script src="{{asset('assets/js/app.js')}}"></script>

    </body>


<!-- Mirrored from themesbrand.com/steex/layouts/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2023 07:47:04 GMT -->
</html>