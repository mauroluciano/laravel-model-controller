@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <h1>{{ $title }}</h1>
  </section>


  <div class="row">
    @forelse ($movies as $movie)
    <div class="col-3">
        <div class="card h-100">
            <div class="card-body text-center">
                <h3>{{ $movie['title'] }}</h3>
                <p>{{ $movie['nationality'] }}</p>
            </div>    
            </div>
    </div>
        
    @empty
        no movies
    @endforelse
</div>

@endsection
@endsection
