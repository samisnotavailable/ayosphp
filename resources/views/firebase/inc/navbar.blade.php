<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #0717b2;">

    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ url('/img/ayos_textlogo_48x48.png') }}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link"  href="{{ url('') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('faqs') }}">FAQs</a>
                </li>

                @auth <!-- Show Logout link if the user is logged in -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin-index') }}">Admin</a>
                    </li>
                <li class="nav-item">
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link">Logout</button>
                    </form>
                </li>
                @else <!-- Show Login link if the user is logged out -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('login') }}">Admin-only</a>
                </li>
                @endauth

            </ul>
            <!--
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav>
