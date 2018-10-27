<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('css/backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/backend/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/backend/images/favicon.png')}}" />
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

   @extends('admin.includes.navebar')






    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        {{--<!-- partial:partials/_sidebar.html -->--}}
     {{--@extends('admin.includes.sidebar')--}}

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="user-wrapper">
                            <div class="profile-image">
                                <img src="{{asset('images/backend/images/faces/face1.jpg')}}" alt="profile image">
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">Richard V.Welsh</p>
                                <div>
                                    <small class="designation text-muted">Manager</small>
                                    <span class="status-indicator online"></span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success btn-block">New Project
                            <i class="mdi mdi-plus"></i>
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="menu-icon mdi mdi-television"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="menu-icon mdi mdi-content-copy"></i>
                        <span class="menu-title">Basic UI Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/forms/basic_elements.html">
                        <i class="menu-icon mdi mdi-backup-restore"></i>
                        <span class="menu-title">Form elements</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartjs.html">
                        <i class="menu-icon mdi mdi-chart-line"></i>
                        <span class="menu-title">Charts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">Tables</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/icons/font-awesome.html">
                        <i class="menu-icon mdi mdi-sticker"></i>
                        <span class="menu-title">Icons</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-restart"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/samples/login.html"> Login </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/samples/register.html"> Register </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>





        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">


            @yield('content')





            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
           @extends('admin.includes.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>

    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('js/backend/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('js/backend/vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('js/backend/js/off-canvas.js')}}"></script>
<script src="{{asset('js/backend/js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('js/backend/js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
</body>

</html>