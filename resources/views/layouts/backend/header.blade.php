{{-- <header class="dashboard">
    <nav class="navigation">
        <span class="icon-menu"><ion-icon name="menu"></ion-icon></span>
        <a href="{{ route('dashboard') }}">Home</a>
        <li class="nav-item d-none d-sm-inline-block">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</a>
            </form>
        </li>
    </nav>
</header> --}}
<ul>
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('dashboard')}}" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</a>
        </form>
    </li>
</ul>
