<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic App</title>
  @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body class="p-4">
  <x-navbar></x-navbar>
  <div class="main flex justify-center">
    <div class="w-100">
      {{ $slot }}
    </div>
  </div>
</body>
</html>