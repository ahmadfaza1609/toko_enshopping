
    <div class="col">
        <a href="{{ route('detail.landing', $p->id) }}" class="text-decoration-none __body-card">
            <div class="card shadow rounded __box-product ">
                <img src="{{ url('https://via.placeholder.com/750x500') }}" alt="placeholder" class="card-img-top" width="100%" height="225"/>

                <div class="card-body">
                    <h1 class="card-title fs-5 fw-bold">{{ $p->title}}</h1>
                    <p class="card-text __price">{{ $p->price}}</p>
                    <div class="d-flex justify-content-between align-items-center pt-3">

                    </div>
                </div>
            </div>
        </a>
    </div>



