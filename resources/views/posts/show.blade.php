<x-layout>
  <div class="border-2 p-4 px-8">
    <h1 class="text-2xl font-semibold mb-3">{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
  </div>
  <div class="p-8">
    <a href="/posts/{{$post->id}}/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>
  </div>
</x-layout>