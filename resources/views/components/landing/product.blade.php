<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
@foreach($product as $p)
    <div class="col">
        
        <a href="{{ route('detail.landing', $p->id) }}" class="text-decoration-none __body-card">
            <div class="card shadow rounded __box-product ">
                <img src="{{ url('https://via.placeholder.com/750x500') }}" alt="placeholder" class="card-img-top" width="100%" height="225"/>

                <div class="card-body">
                    <h1 class="card-title fs-5 fw-bold">{{ $p->title}}</h1>
                    <p class="card-text __price">{{ $p->price}}</p>
                    <div class="d-flex justify-content-between align-items-center pt-3">

                    <a href="#" class="btn px-4 me-auto btn-sm btn-success">Beli</a>
                    </div>
                </div>
            </div>
        </a>
        
    </div>
    @endforeach

</div>
