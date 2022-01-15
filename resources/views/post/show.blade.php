@extends('layouts.public')

@section('content')
<div class="container my-4">
    @auth
    <a href="{{ route('post.edit', $post) }}" class="btn btn-sm btn-primary">Edit</a>
    <span class="btn btn-sm btn-danger" style="cursor: pointer"
        onclick="event.preventDefault();document.getElementById('deleteThisPost').submit();">Delete</span>
    <form action="{{ route('post.destroy', $post) }}" method="post" id="deleteThisPost">
        @csrf
        @method('DELETE')
    </form>
    @endauth
    <h1 class="mt-3">{{ $post->title }}</h1>
    <p>{!! $post->body !!}</p>
</div>
@endsection
