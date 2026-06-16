<x-layout>
  <h2>Edit Post</h2>
  <form action="/posts/{{ $post->id }}" method="post">
    @method("PATCH")
    @csrf

    <div class="field">
      <label for="title">Post Title</label>
      <input type="text" name="title" id="title" placeholder="{{ $post->title }}">
    </div>

    <div class="field">
      <label for="body">Post Body</label>
      <textarea name="body" id="body" cols="25" rows="5">{{ $post->body }}</textarea>
    </div>

    <div class="action">
      <button type="submit">Edit post</button>
    </div>
  </form>
</x-layout>