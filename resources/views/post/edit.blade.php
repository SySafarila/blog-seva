<form action="{{ route('post.update', $post->id) }}" method="post">
    @csrf
    @method('PATCH')
<div>
    <label for="">Title</label>
    <input type="text" name="title" value="{{ $post->title }}">
</div>
<div>
    <label for="">Body</label>
    <textarea name="body" id="" cols="30" rows="10">{{ $post->body }}</textarea>
</div>
<button type="submit">Save</button>
</form>
