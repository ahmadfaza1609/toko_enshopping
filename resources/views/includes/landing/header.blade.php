<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light shadow ">
    <div class="container">
        <a class="navbar-brand __logo-brand" href="#">EN-Shopping</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link __nav active" aria-current="page" href="{{ route('index') }}">Beranda</a>
                <a class="nav-link __nav" href="#product">Product</a>
                <a class="nav-link __nav" href="#feedback">Feedback</a>
                <a class="nav-link __nav" href="{{ route('kategori.landing') }}">Kategori Product</a>
            </div>
        </div>
    </div>
</nav>
