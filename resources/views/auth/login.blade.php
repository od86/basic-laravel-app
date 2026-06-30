<x-layout>
  <form action="/login" method="post">
    @csrf

    <div class="field">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>
    </div>
    <div class="field">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
    </div>

    <div class="action">
      <button type="submit">Login</button>
    </div>
  </form>

  <div class="errors">
    <x-forms.error name="email"></x-forms>
    <x-forms.error name="password"></x-forms>
  </div>
</x-layout>