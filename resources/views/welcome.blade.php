@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="d-flex justify-content-center">
        <h1>Lista Film:</h1>
    </div>
    <div class="d-flex justify-content-center">
        <a href="/filtro"><button type="button" class="btn btn-light">Ordina i film per data</button></a>
    </div>
    <div class="row g-4">
        <div class="col d-flex flex-wrap">
            @foreach ($movies as $movie)
            <div class="card m-3 " style="width: 18rem;">

                <div class="card-body">
                  <h5 class="card-title">{{$movie ->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Titolo originale: {{$movie ->original_title}}</h6>
                  <p class="card-text">Nazionalità: {{$movie ->nationality}}</p>
                  <p class="card-text">data: {{$movie ->date}}</p>
                  <p class="card-text">Voto: {{$movie ->vote}}</p>
                  
                </div>
            </div>
                
            @endforeach
        </div>
    </div>

</div>
@endsection

