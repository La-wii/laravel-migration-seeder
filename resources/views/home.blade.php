@extends('layout.app')
@section('title', 'titolo pagina')
@section('content')
<div class="container">
    @foreach ($viaggi as $viaggio)
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$viaggio['name']}}
                    </h5>
                    <p class="card-text">
                        {{$viaggio['city']}}
                    </p>
                    <p class="card-text">
                        {{$viaggio['description']}}
                    </p>
                    <p class="card-text">
                        Il prezzo è di euro: {{$viaggio['price']}}
                    </p>
                </div>
            </div>    
        </div>
    </div>
    @endforeach
</div>
@endsection