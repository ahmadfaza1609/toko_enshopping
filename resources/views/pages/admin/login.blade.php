

@section('content')
<div class="bg-gradient-primary">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        @include('components.admin.modal.login')
                        
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

@endsection
