<x-layout>
  <h2>All posts</h2>
  @if (sizeof($posts) != 0) 
    <ul>
      @foreach ($posts as $post)
        <li>
          <a href="/posts/{{$post->id}}">{{$post->id}} - {{$post->title}}</a>
        </li>
      @endforeach
    </ul>
  @else
    <div>There are no tasks</div>
  @endif
</x-layout>