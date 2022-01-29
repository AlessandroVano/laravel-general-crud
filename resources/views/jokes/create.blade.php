@extends('layouts.main')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-4">
               <form action="{{ route('jokes.store') }}" method="POST">
                @csrf
                 <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author">
                 </div>
                 <div class="mb-3">
                   <label for="title" class="form-label">Title</label>
                   <input type="text" class="form-control" id="title" name="title">
                 </div>
                 <div class="mb-3">
                   <label for="body" class="form-label">Jokes</label>
                   <textarea class="form-control" id="body" name="body" row="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Joke</button>
              </form> 
           
            </div>
        </div>
    </div>

    
@endsection