<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layout.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('layout.navbar')
        @include('layout.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="{{app()->getLocale() == 'ar' ? 'margin-left: 0 !important;':''}}">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{__('adminlte.dashboard')}}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#">@yield('section')</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    @yield('subsection')
                                </li>

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            @yield('content')

        </div>
        <!-- /.content-wrapper -->
        @include('layout.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark" style="left: 0; transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('layout.footer_scripts')
</body>

</html>
