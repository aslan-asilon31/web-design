<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>v1</title>
  <script src="https://cdn.tailwindcss.com"></script>




  @wireUiScripts
  @filepondScripts
  @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  <div x-data="{ cartOpen: false, isOpen: false }" class="bg-white">
    <header>
      <div class="container mx-auto px-6 py-3">
        <div class="sticky top-0 fixed flex items-center justify-between  z-50">
          <div class="hidden w-full text-gray-600 md:flex md:items-center ">
            <span class="mx-1 text-sm bg-[#dc3545] w-48">
              <img src="/logo.webp" alt="" srcset="">
            </span>
          </div>
          <div class="w-full text-gray-700 md:text-center text-2xl font-semibold">
            <form method="GET" action="{{ route('v1.product-filter') }}" class="flex items-center">
              <x-select label="" placeholder="Select some user" :async-data="url('/api/v1/select/product-category-firsts')" :template="[
                  'name' => 'user-option',
              
                  'config' => ['src' => 'image_url'],
              ]"
                option-label="name" option-value="id" option-description="name" />
            </form>
          </div>
          <div class="flex items-center justify-end w-full">
            <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none mx-4 sm:mx-0">
              <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" stroke="currentColor">
                <path
                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
              </svg>
            </button>

            <div class="flex sm:hidden">
              <button @click="isOpen = !isOpen" type="button"
                class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                aria-label="toggle menu">
                <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                  <path fill-rule="evenodd"
                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                  </path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4">
          <div class="flex flex-col sm:flex-row">
            <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Home</a>
            <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Shop</a>
            <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Categories</a>
            <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">Contact</a>
            <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="#">About</a>
          </div>
        </nav>
        <div class="relative mt-6 max-w-lg mx-auto">

        </div>
      </div>
    </header>


    {{ $slot }}

    <footer class="bg-gray-200">
      <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">Brand</a>
        <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
      </div>
    </footer>


  </div>

</body>

</html>
