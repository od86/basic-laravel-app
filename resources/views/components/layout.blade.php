<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic App</title>
</head>
<body>
  <div class="navbar">
    @guest
      <a href="/register">Register</a>
      <a href="/login">Login</a>
    @endguest
    @auth
      <a href="/posts">Index</a>
      <a href="/posts/create">New</a>
      @can("view-admin")
        <a href="/admin">Admin</a>
      @endcan
      <form action="/logout" method="post">
        @csrf
        @method("delete")

        <button type="submit">Logout</button>
      </form>
    @endauth
  </div>

  {{ $slot }}
</body>
</html>