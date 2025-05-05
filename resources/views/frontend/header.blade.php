<header>
    <div class="logo-wrapper"><a href="{{ route(name: 'home') }}">
    <img src="{{asset('web_assets/frontend/images/logo/main-logo-white.svg')}}" alt="">
    </a></div>
    <button class="nav-toggle" aria-label="toggle navigation">☰</button>
    <nav>
        <ul>
            <li><a href="{{ route(name: 'home') }}">Home</a></li>
            <li><a href="#">PDF To Text</a></li>
            <li><a href="#">About</a></li>
            <li><a href="{{ route('blogs') }}">Blog</a></li>
            <li><a href="#" class="login-btn">Login</a></li>
        </ul>
    </nav>
</header>
