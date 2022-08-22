<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.meta')
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>@yield('title-browser', 'Tugas Akhir')</title>
    @include('layouts.css')
    <!-- Plugins css start-->
    @stack('add_css')
    <!-- Plugins css Ends-->

</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
            @include('layouts.navbar')
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper horizontal-menu">
            <!-- Page Sidebar Start-->
            @include('layouts.sidebar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>@yield('title-page', 'Blank Title')</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">@yield('breadcrumb1', 'breadcrumb 1')</a></li>
                                    <li class="breadcrumb-item">@yield('breadcrumb2', 'breadcrumb 2')</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h5>@yield('title-card', 'Title Card')</h5>
                                </div>
                                <div class="card-body">
                                    @yield('content-card')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            @include('layouts.footer')
        </div>
    </div>
    @include('layouts.js')
    <!-- Plugins JS start-->
    @stack('add_js')
    <!-- Plugins JS Ends-->
</body>

</html>
