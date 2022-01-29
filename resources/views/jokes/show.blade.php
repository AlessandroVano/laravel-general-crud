@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mb-5">{{ $jokes->body }}</h1>

        <a  href="{{ route('jokes.index') }}" class="btn btn-primary mb-3">Torna indietro</a>
    </div>
@endsection