<!DOCTYPE html>
<html lang="en">

<head>
    @include("partials/head")
    <title>@yield('page_title')</title>
</head>

<body class="bg-light">
<div id="db-wrapper">
    <!-- navbar vertical -->
    @include('partials/navbar-vertical')
    <!-- Page content -->
    <div id="page-content">
        @include("partials/header")
        <!-- Container fluid -->
        <div class="bg-primary pt-10 pb-21"></div>
        <div class="container-fluid mt-n22 px-6">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0  text-white">@yield('header_title')</h3>
                            </div>
                            <div>
                                <a href="#" class="btn btn-white">Create New Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('header_content')
            </div>
            <!-- row  -->
            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    @yield('main_content')
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Scripts -->
@include("partials/scripts")


</body>

</html>
