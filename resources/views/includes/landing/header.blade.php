<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light shadow ">
    <div class="container">

        <a class="navbar-brand __logo-brand d-flex" href="{{ route('index') }}">
            <img src="{{ asset('assets/images/logo-img.png')}}" alt="" height="65" class="d-inline-block align-text-top pe-2">
            <div class="text-logo-brand">
                BUMDES
                <p class="fs-6 fw-light">Mekar Jaya Sei Pakning</p>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link __nav {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('index') }}">Beranda</a>
                <a class="nav-link __nav" data-link="product">Product</a>
                <a class="nav-link __nav" data-link="feedback">Feedback</a>
            </div>
        </div>
    </div>
</nav>
