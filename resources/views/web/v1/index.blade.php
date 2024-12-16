<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>v1</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* Container for the banner */
    .banner-container {
      width: 100%;
      overflow: hidden;
      position: relative;
      background-color: #f3f4f6;
    }

    /* The actual content of the banner that will scroll */
    .banner-content {
      display: flex;
      white-space: nowrap;
      animation: scroll-banner 15s linear infinite;
    }

    /* Style for each item in the banner */
    .banner-item {
      padding: 20px;
      margin-right: 50px;
      background-color: #3498db;
      color: white;
      font-size: 20px;
      font-weight: bold;
      border-radius: 5px;
    }

    /* Animation for scrolling */
    @keyframes scroll-banner {
      0% {
        transform: translateX(100%);
      }

      100% {
        transform: translateX(-100%);
      }
    }
  </style>



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
    {{-- <div :class="cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'"
      class="fixed right-0 top-0 max-w-xs w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300">
      <div class="flex items-center justify-between">
        <h3 class="text-2xl font-medium text-gray-700">Your cart</h3>
        <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none">
          <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            viewBox="0 0 24 24" stroke="currentColor">
            <path d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <hr class="my-3">
      <div class="flex justify-between mt-6">
        <div class="flex">
          <img class="h-20 w-20 object-cover rounded"
            src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
            alt="">
          <div class="mx-3">
            <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
            <div class="flex items-center mt-2">
              <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </button>
              <span class="text-gray-700 mx-2">2</span>
              <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <span class="text-gray-600">20$</span>
      </div>
      <div class="flex justify-between mt-6">
        <div class="flex">
          <img class="h-20 w-20 object-cover rounded"
            src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
            alt="">
          <div class="mx-3">
            <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
            <div class="flex items-center mt-2">
              <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </button>
              <span class="text-gray-700 mx-2">2</span>
              <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <span class="text-gray-600">20$</span>
      </div>
      <div class="flex justify-between mt-6">
        <div class="flex">
          <img class="h-20 w-20 object-cover rounded"
            src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
            alt="">
          <div class="mx-3">
            <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
            <div class="flex items-center mt-2">
              <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </button>
              <span class="text-gray-700 mx-2">2</span>
              <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <span class="text-gray-600">20$</span>
      </div>
      <div class="mt-8">
        <form class="flex items-center justify-center">
          <input class="form-input w-48" type="text" placeholder="Add promocode">
          <button
            class="ml-3 flex items-center px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
            <span>Apply</span>
          </button>
        </form>
      </div>
      <a
        class="flex items-center justify-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
        <span>Chechout</span>
        <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          viewBox="0 0 24 24" stroke="currentColor">
          <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
      </a>
    </div> --}}
    <main class="my-8">
      <div class="container mx-auto px-6">
        <div class="h-64 rounded-md overflow-hidden bg-cover bg-center"
          style="background-image: url('https://www.proquip.id/files/images/homes/home-catalogue-1.webp')">
          <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
            <div class="px-10 max-w-xl">
              <h2 class="text-2xl text-white font-semibold">Sport Shoes</h2>
              <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere
                provident molestias ipsam sint voluptatum pariatur.</p>
              <button
                class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                <span>Shop Now</span>
                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="md:flex mt-8 md:-mx-4">
          <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2"
            style="background-image: url('https://images.unsplash.com/photo-1547949003-9792a18a2601?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
            <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
              <div class="px-10 max-w-xl">
                <h2 class="text-2xl text-white font-semibold">Back Pack</h2>
                <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere
                  provident molestias ipsam sint voluptatum pariatur.</p>
                <button
                  class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                  <span>Shop Now</span>
                  <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2"
            style="background-image: url('https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
            <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
              <div class="px-10 max-w-xl">
                <h2 class="text-2xl text-white font-semibold">Games</h2>
                <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere
                  provident molestias ipsam sint voluptatum pariatur.</p>
                <button
                  class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                  <span>Shop Now</span>
                  <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-16">
          <div class="banner-container">
            <div class="banner-content">
              <div class="banner-item">Category 1</div>
              <div class="banner-item">Category 2</div>
              <div class="banner-item">Category 3</div>
              <div class="banner-item">Category 4</div>
              <div class="banner-item">Category 5</div>
              <div class="banner-item">Category 6</div>
            </div>
          </div>
        </div>
        <div class="mt-16">
          <h3 class="text-gray-600 text-2xl font-medium">Fashions</h3>
          <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
              <div class="flex items-end justify-end h-56 w-full bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1563170351-be82bc888aa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=376&q=80')">
                <button
                  class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                  </svg>
                </button>
              </div>
              <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">Chanel</h3>
                <span class="text-gray-500 mt-2">$12</span>
              </div>
            </div>
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
              <div class="flex items-end justify-end h-56 w-full bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80')">
                <button
                  class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                  </svg>
                </button>
              </div>
              <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">Man Mix</h3>
                <span class="text-gray-500 mt-2">$12</span>
              </div>
            </div>
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
              <div class="flex items-end justify-end h-56 w-full bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
                <button
                  class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                  </svg>
                </button>
              </div>
              <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">Classic watch</h3>
                <span class="text-gray-500 mt-2">$12</span>
              </div>
            </div>
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
              <div class="flex items-end justify-end h-56 w-full bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1590664863685-a99ef05e9f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=345&q=80')">
                <button
                  class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                  </svg>
                </button>
              </div>
              <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">woman mix</h3>
                <span class="text-gray-500 mt-2">$12</span>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-16">
          <h3 class="text-gray-600 text-2xl font-medium">Fashions</h3>
          <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
              <div class="flex items-end justify-end h-56 w-full bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1563170351-be82bc888aa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=376&q=80')">
                <button
                  class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                  </svg>
                </button>
              </div>
              <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">Chanel</h3>
                <span class="text-gray-500 mt-2">$12</span>
              </div>
            </div>
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
              <div class="flex items-end justify-end h-56 w-full bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80')">
                <button
                  class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                  </svg>
                </button>
              </div>
              <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">Man Mix</h3>
                <span class="text-gray-500 mt-2">$12</span>
              </div>
            </div>
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
              <div class="flex items-end justify-end h-56 w-full bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
                <button
                  class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                  </svg>
                </button>
              </div>
              <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">Classic watch</h3>
                <span class="text-gray-500 mt-2">$12</span>
              </div>
            </div>
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
              <div class="flex items-end justify-end h-56 w-full bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1590664863685-a99ef05e9f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=345&q=80')">
                <button
                  class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                  </svg>
                </button>
              </div>
              <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">woman mix</h3>
                <span class="text-gray-500 mt-2">$12</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="bg-gray-200">
      <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">Brand</a>
        <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
      </div>
    </footer>
  </div>

</body>

</html>
