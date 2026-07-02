@props([
  "name" => "required"
])

@error($name)
  <div class="error text-red-500 flex justify-center font-semibold">
    {{ $message }}
  </div>
@enderror