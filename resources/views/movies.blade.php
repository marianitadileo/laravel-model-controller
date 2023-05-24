@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center m-3">Movies</h1>
    <div class="row row-cols-6 gap-4 d-flex justify-content-center">
        @foreach ($movies as $movie)
        <div class="card ms_card">
            <img class="ms_img" src="{{ $movie->image }}" alt=""> 
            <div class="card-body">
                <h4>{{ $movie->title }}</h4>
            </div>  
        </div>     
        @endforeach
    </div>
</div>
    
@endsection