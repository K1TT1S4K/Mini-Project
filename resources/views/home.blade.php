<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hmoe</title>
  {{-- <link rel="stylesheet" href="css/style.css"> --}}
  @include('layouts.backend.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    {{-- @include('layouts.backend.nav') --}}
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('home')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</a>
                </form>
            </li>
        </ul>
    </nav>
    {{-- @include('layouts.backend.menu')
    @yield('content')
    @include('layouts.backend.footer') --}}
    <div class="wrapper">
        {{-- @include('layouts.backend.nav') --}}
        @include('layouts.backend.menu')
        @yield('content')
        @include('layouts.backend.footer')
    </div>
    @include('layouts.backend.js')
    @livewireScripts
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
