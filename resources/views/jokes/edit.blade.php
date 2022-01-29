@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
           <div class="col-4">
            <form action="{{ route('jokes.update', $jokes->id) }}" method="POST">
                @csrf
                  @method('PATCH')
                 <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $jokes->author }}">
                 </div>
                 <div class="mb-3">
                   <label for="title" class="form-label">Title</label>
                   <input type="text" class="form-control" id="title" name="title"value="{{ $jokes->title }}">>
                 </div>
                 <div class="mb-3">
                   <label for="body" class="form-label">Jokes</label>
                   <textarea class="form-control" id="body" name="body" row="3">{{ $jokes->body }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Joke</button>
              </form> 
           </div>
        </div>
    </div>
@endsection