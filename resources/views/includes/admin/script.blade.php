<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

{{-- dataTable --}}
<script src="{{url('https://code.jquery.com/jquery-3.5.1.js')}}"></script>
<script src="{{url('https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js')}}"></script>

<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js') }}"></script>
<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css') }}"></script>
<script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
    $('.owl-carousel').owlCarousel({
        items:1,
        merge:true,
        loop:true,
        margin:10,
        video:true,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:2
            },
            600:{
                items:4
            }
        }
    })
</script>
