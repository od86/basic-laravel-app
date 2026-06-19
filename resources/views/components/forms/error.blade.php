@props([
  "name" => "required"
])

@error($name)
  <div class="error">{{ $message }}</div>
@enderror