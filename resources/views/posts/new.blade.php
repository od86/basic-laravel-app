<x-layout>
  <h2>Create Post</h2>
  <form action="/posts" method="post">
    @csrf

    <div class="field">
      <label for="title">Post Title</label>
      <input type="text" name="title" id="title">
    </div>

    <div class="field">
      <label for="body">Post Body</label>
      <textarea name="body" id="body" cols="25" rows="5"></textarea>
    </div>

    <div class="action">
      <button type="submit">Create post</button>
    </div>
  </form>

  <x-forms.error name="title"></x-error>
  <x-forms.error name="body"></x-error>
</x-layout>