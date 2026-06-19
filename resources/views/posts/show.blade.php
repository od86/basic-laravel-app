<x-layout>
  <h2>{{ $post->title }}</h2>
  <p>{{ $post->body }}</p>
  <a href="/posts/{{$post->id}}/edit">Edit</a>
</x-layout>