<header>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Welcome to my Blog</h1>
            </div>
            <div class="col">
                <div class="row pt-2">
                    @auth
                        <h3>{{ Auth::user() -> name }}</h3>
                        <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>