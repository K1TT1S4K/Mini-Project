<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  {{-- <link rel="stylesheet" href="css/style.css"> --}}
  @include('layouts.backend.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('layouts.backend.nav')
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
