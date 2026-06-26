<x-layout>
  <form action="/login" method="post">
    @csrf
    
    <div class="field">
      <label for="name">Name</label>
      <input type="text" name="name" id="name">
    </div>
    <div class="field">
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
    </div>
    <div class="field">
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
    </div>

    <div class="action">
      <button type="submit">Login</button>
  </div>
  </form>
</x-layout>