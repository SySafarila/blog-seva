@extends('layouts.public')

@section('head')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container my-4">
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea name="body" id="summernote" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
@endsection
