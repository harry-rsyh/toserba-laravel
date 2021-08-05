<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toserba App</title>

    {{-- fontawesome-free --}}
    <link rel="stylesheet" href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" type="text/css">

    {{-- Googlefont --}}
    <link 
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    {{-- Custom style SB Admin --}}
    <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    @yield('any-css')
</head>
<body id="page-top">

    {{-- Page Wrapper --}}
    <div id="wrapper">

        {{-- Sidebar --}}
        @include('components.sidebar')

        {{-- Content Wrapper --}}
        <div id="content-wrapper" class="d-flex flex-column">

            {{-- Main Content --}}
            <div id="content">

                {{-- Topbar --}}
                @include('components.topbar')

                {{-- Begin Page Content --}}
                <div class="container-fluid">

                    @yield('content-title')

                    {{-- Content --}}
                    @yield('content')
                </div>

            </div>

            {{-- Footer --}}
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    {{-- Scroll to Top Butto --}}
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    {{-- logout modal --}}
    @include('components.modal.logout')

    {{-- Bootstrap core JavaScript --}}
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{-- Core plugin JavaScript --}}
    <script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    {{-- Custom scripts for all pages --}}
    <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>

    @yield('any-js')
</body>
</html>