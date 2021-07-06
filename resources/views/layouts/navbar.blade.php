<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="dashboard"><b>StudySite</b> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            @auth
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('dashboard') }}">Dashboard <span class="sr-only"></span></a>
                </li>
            @endauth

            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('Programs') }}">Programs</a>
                </li>
            @endauth

            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Languages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Clang">C Language</a>
                    <a class="dropdown-item" href="C++">C++ Language</a>
                    <a class="dropdown-item" href="Java">Java</a>
                </div> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ url('ContactUs') }}">Contact us</a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('user-login') }}">Login </a>
                </li>
            @endguest

            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('my-profile') }}">My Profile</a>
                        <a class="dropdown-item" href="{{ url('change_password') }}"> Change Password </a>
                        <a class="dropdown-item" href="{{ url('logout') }}"> Logout </a>
                    </div>
                </li>
            @endauth
        </ul>
    </div>
</nav>
