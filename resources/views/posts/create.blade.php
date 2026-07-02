<x-layout>
  <h1 class="text-2xl font-semibold mb-3">Create Post</h1>
  <form action="/posts" method="post">
    @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
        Title
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Title" name="title">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
        Body
      </label>
      <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline h-full min-h-[200px] w-full resize-none" placeholder=" " id="body" name="body">
      </textarea>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Create
      </button>
    </div>
  </form>
  <x-forms.error name="title"></x-error>
  <x-forms.error name="body"></x-error>
</x-layout>