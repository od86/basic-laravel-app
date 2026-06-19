<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic App</title>
</head>
<body>
  <div class="navbar">
    <a href="/posts">Index</a>
    <a href="/posts/new">New</a>
  </div>

  {{ $slot }}
</body>
</html>