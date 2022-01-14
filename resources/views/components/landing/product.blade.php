<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
    <div class="col">
        @foreach($product as $p)
        <a href="{{ route('detail.landing', $p->id) }}" class="text-decoration-none __body-card">
            <div class="card shadow rounded __box-product ">
                <img src="{{ url('https://via.placeholder.com/750x500') }}" alt="placeholder" class="card-img-top" />

                <div class="card-body">
                    <h1 class="card-title fs-5 fw-bold">{{ $p->title}}</h1>
                    <p class="card-text __price">{{ $p->price}}</p>
                    <div class="d-flex justify-content-between align-items-center pt-3">

                    <a href="#" class="btn px-4 me-auto btn-sm btn-success">Beli</a>
                    <small class="text-muted fst-italic">Shopee</small>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>

</div>
