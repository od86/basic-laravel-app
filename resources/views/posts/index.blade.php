<x-layout>
  <h1 class="text-2xl font-semibold mb-3">Posts</h1>
  @if (sizeof($posts) != 0) 
    <ul class="list-inside">
      @foreach ($posts as $post)
        <li class="list-disc">
          <a href="/posts/{{$post->id}}" class="px-4 hover:underline">{{$post->title}}</a>
        </li>
      @endforeach
    </ul>
  @else
    <div class="px-8">There are no posts</div>
  @endif
</x-layout>