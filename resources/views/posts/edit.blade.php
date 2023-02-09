<form action="{{ route('posts.update', $post->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
  </div>
  <div class="form-group">
    <label for="body">Body:</label>
    <textarea class="form-control" id="body" name="body">{{ $post->body }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>