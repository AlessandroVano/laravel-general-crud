@extends('layouts.main')

@section('content')
  <div class="container">
      <h1 class="mb-5">DI COLMI NE ABBIAMO?</h1>
      <div class="row">
       
          @foreach ($jokes as $joke)
          <div class="card mb-5 m-3 " style="width: 18rem;">
              <h1>{{ $joke->id }}</h1>
              <h2>{{ $joke->author }}</h2>
              <div class="card-body"></div>
            <h4 class="card-title">{{ $joke->title }}</h3>
         {{--    <p class="card-text">{{ $joke->body }}</p>  --}}
            <a  href="{{ route('jokes.show', $joke->id) }}" class="btn btn-primary mb-3">clicca per scoprire</a>
           
          </div>
        
             
          @endforeach
      </div>
  </div>
    
@endsection