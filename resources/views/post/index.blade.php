@extends('layouts.public')

@section('head')
<title>Posts</title>
@endsection

@section('content')
<div class="container my-4">
    @auth
    <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
    @endauth
    <div class="d-flex flex-column my-4" style="gap: 1rem;">
        @foreach ($posts as $post)
        <div>
            <h3><a href="{{ route('post.show', $post) }}" class="text-decoration-none">{{ $post->title }}</a></h3>
            <p class="m-0 text-truncate">{!! $post->body !!}</p>
            <small>
                <a href="{{ route('post.show', $post) }}">Read More</a>
            </small>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('script')
{{-- --}}
@endsection

{{-- @foreach ($posts as $post)
<li>
    <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
    <ul>
        <li><a href="{{ route('post.edit', $post->id) }}">Edit</a></li>
        <li>
            <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    </ul>
</li>
@endforeach --}}
