<x-layout>
  <section class="px-6 py-8">
    <main class="px-6 py-8 max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl ">
      <h1 class="text-center font-bold text-xl text-gray-700">Log In!!</h1>

      <form method="POST" action="/login" class="mt-10">
        @csrf

        {{--email--}}
        <div class="mb-6">
          <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                 for="email"
          >
            Email
          </label>

          <input class="border border-gray-400 p-2 w-full outline-none"
                 type="text"
                 name="email"
                 id="email"
                 value="{{ old('email') }}"
                 required
          >
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>


        {{--password--}}
        <div class="mb-6">
          <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                 for="password"
          >
            Password
          </label>
          <input class="border border-gray-400 p-2 w-full outline-none"
                 type="password"
                 name="password"
                 id="password"
                 required
          >
          @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{--submit--}}
        <div class="mb-6 flex justify-center">
          <button type="submit"
                  class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 w-1/3"
          >
            Login
          </button>
        </div>


    </main>
  </section>
</x-layout>