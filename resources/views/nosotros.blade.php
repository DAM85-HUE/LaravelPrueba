@extends('layouts.app')

@section('content')

    <div class="flex-center position-ref full-height">

        <div class="container">
            <div class="card">
                <div class="text-center"><h5 class="card-header">Nosotros</h5></div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 offset-md-2">
                            
                            <div class="text-center"><a href="{{route('index')}}" class="btn btn-primary" style="color:white;">Ir a la portada</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
<!-- Scripts -->
@push('scripts')
    <script src="js/scripts.js"></script>
@endpush