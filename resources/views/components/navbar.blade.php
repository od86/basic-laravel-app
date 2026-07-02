<div class="navbar flex gap-8 py-4 pb-16 justify-evenly">
  @guest
    <a href="/register" class="font-medium text-fg-brand hover:underline">Register</a>
    <a href="/login" class="font-medium text-fg-brand hover:underline">Login</a>
  @endguest
  @auth
    <div class="user-functions flex gap-8 underline">
      <a href="/posts" class="font-medium text-fg-brand hover:underline">Index</a>
      <a href="/posts/create" class="font-medium text-fg-brand hover:underline">New</a>
      @can("view-admin")
        <a href="/admin" class="font-medium text-fg-brand hover:underline">Admin</a>
      @endcan
    </div>
    <form action="/logout" method="post">
      @csrf
      @method("delete")
      <button type="submit" class="font-medium text-fg-brand hover:underline">Logout</button>
    </form>
  @endauth
</div>