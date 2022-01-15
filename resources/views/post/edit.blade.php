@extends('layouts.public')

@section('content')
<div class="container my-4">
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{ $post->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
