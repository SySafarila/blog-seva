@extends('layouts.public')

@section('content')
<div class="container my-4">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
</div>
@endsection
