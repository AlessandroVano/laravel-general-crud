@extends('layouts.main')

@section('content')
  <div class="container">
      <h1 class="mb-5">DI COLMI NE ABBIAMO?</h1>

      @if (session('deleted'))
      <div class="alert alert-success">
        <strong>{{ session('deleted') }}</strong>
        Hai cancellato il colmo correttamente senza nessun intoppo!!
      </div>
        
      @endif

      <div class="row">
       
          @foreach ($jokes as $joke)
          <div class="card mb-5 m-3 " style="width: 18rem;">
              <h1>{{ $joke->id }}</h1> 
              <h2>{{ $joke->author }}</h2>
              <div class="card-body"></div>
            <h4 class="card-title">{{ $joke->title }}</h3>
         {{--    <p class="card-text">{{ $joke->body }}</p>  --}}
         <div>
           <a  href="{{ route('jokes.show', $joke->id) }}" class="btn btn-primary mb-3">clicca per scoprire</a>

           <a  href="{{ route('jokes.edit', $joke->id) }}" class="btn btn-primary mb-3">clicca per modificare</a>
           <form class="mb-2" action="{{ route('jokes.destroy', $joke->id) }}" method="POST">
           @csrf {{-- runniamo il form grazie a questo comando --}}
           @method('DELETE') {{-- diamogli il metodo per attivare la cancellazione --}}
           <input type="submit" class="btn btn-danger" value="delete" onclick="return confirm('Sicuro di voler eliminare questo colmo?')">
           </form>

         </div>
          </div>
        
             
          @endforeach
      </div>
  </div>
    
@endsection