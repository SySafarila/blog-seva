<form action="{{ route('post.store') }}" method="post">
    @csrf
<div>
    <label for="">Title</label>
    <input type="text" name="title">
</div>
<div>
    <label for="">Body</label>
    <textarea name="body" id="" cols="30" rows="10"></textarea>
</div>
<button type="submit">Save</button>
</form>
