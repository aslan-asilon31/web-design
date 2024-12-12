<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>
    {{ $title ?? 'No Title' }} | {{ env('APP_NAME') }}
  </title>
  <link rel="icon" href="favicon.ico">
  <link href="/themes/default/css/style.css" rel="stylesheet">



  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  @wireUiScripts
  @filepondScripts
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    .form-loading,
    .form-loading div {
      box-sizing: border-box;
    }

    .form-loading {
      display: inline-block;
      position: relative;
      width: 80px;
      height: 80px;
    }

    .form-loading div {
      position: absolute;
      width: 6.4px;
      height: 6.4px;
      background: currentColor;
      border-radius: 50%;
      animation: form-loading 1.2s linear infinite;
    }

    .form-loading div:nth-child(1) {
      animation-delay: 0s;
      top: 36.8px;
      left: 66.24px;
    }

    .form-loading div:nth-child(2) {
      animation-delay: -0.1s;
      top: 22.08px;
      left: 62.29579px;
    }

    .form-loading div:nth-child(3) {
      animation-delay: -0.2s;
      top: 11.30421px;
      left: 51.52px;
    }

    .form-loading div:nth-child(4) {
      animation-delay: -0.3s;
      top: 7.36px;
      left: 36.8px;
    }

    .form-loading div:nth-child(5) {
      animation-delay: -0.4s;
      top: 11.30421px;
      left: 22.08px;
    }

    .form-loading div:nth-child(6) {
      animation-delay: -0.5s;
      top: 22.08px;
      left: 11.30421px;
    }

    .form-loading div:nth-child(7) {
      animation-delay: -0.6s;
      top: 36.8px;
      left: 7.36px;
    }

    .form-loading div:nth-child(8) {
      animation-delay: -0.7s;
      top: 51.52px;
      left: 11.30421px;
    }

    .form-loading div:nth-child(9) {
      animation-delay: -0.8s;
      top: 62.29579px;
      left: 22.08px;
    }

    .form-loading div:nth-child(10) {
      animation-delay: -0.9s;
      top: 66.24px;
      left: 36.8px;
    }

    .form-loading div:nth-child(11) {
      animation-delay: -1s;
      top: 62.29579px;
      left: 51.52px;
    }

    .form-loading div:nth-child(12) {
      animation-delay: -1.1s;
      top: 51.52px;
      left: 62.29579px;
    }

    @keyframes form-loading {

      0%,
      20%,
      80%,
      100% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.5);
      }
    }
  </style>

</head>

<body x-data="{ page: 'formLayout', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">
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
            <x-input label=""
              class="text-xs sm:text-xs sm:font-normal  md:text-sm md:font-medium lg:text-sm lg:font-medium"
              placeholder="search product">
              <x-slot name="append">
                <x-button class="h-full" icon="magnifying-glass-circle" rounded="rounded-r-md" primary flat />
              </x-slot>
            </x-input>
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
            <a class="mt-3 text-gray-600 hover:underline pt-1 sm:mx-3 sm:mt-0" href="#">Home</a>
            <a class="mt-3 text-gray-600 hover:underline pt-1 sm:mx-3 sm:mt-0" href="#">Contact</a>
            <a class="mt-3 text-gray-600 hover:underline pt-1 sm:mx-3 sm:mt-0" href="#">About</a>
            <div class="flex items-center">
              <div class="relative group">
                <!-- Dropdown button -->
                <button id="dropdown-button" style="outline: none;"
                  class="inline-flex w-full text-sm font-medium text-gray-700 bg-white rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                  <span class="mr-2">Product</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                      d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
                  </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown-menu"
                  class="hidden absolute left-0 top-full mt-2 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 p-1 h-64 overflow-y-auto whitespace-nowrap"
                  style="z-index: 999;">
                  <!-- Search input -->
                  <input id="search-input"
                    class="block w-full px-4 py-2 text-gray-800 border rounded-md border-gray-300 focus:outline-none"
                    type="text" placeholder="Search items" autocomplete="off">

                  <!-- Dropdown items -->
                  @forelse ($productListDropdowns as $productListDropdown)
                    <a href="#"
                      class="text-xs block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer rounded-md">{{ $productListDropdown->name }}</a>
                  @empty
                    <h1 class="text-xs text-gray-500">No products found</h1>
                  @endforelse
                </div>
              </div>
            </div>

            <a class="mt-3 text-gray-600 hover:underline pt-1 sm:mx-3 sm:mt-0" href="#">Home</a>

            <script>
              window.addEventListener('DOMContentLoaded', (event) => {


                // JavaScript to toggle the dropdown
                const dropdownButton = document.getElementById('dropdown-button');
                const dropdownMenu = document.getElementById('dropdown-menu');
                const searchInput = document.getElementById('search-input');
                let isOpen = true; // Set to true to open the dropdown by default

                // Function to toggle the dropdown state
                function toggleDropdown() {
                  isOpen = !isOpen;
                  dropdownMenu.classList.toggle('hidden', !isOpen);
                }

                // Set initial state
                toggleDropdown();

                dropdownButton.addEventListener('click', () => {
                  toggleDropdown();
                });

                // Add event listener to filter items based on input
                searchInput.addEventListener('input', () => {
                  const searchTerm = searchInput.value.toLowerCase();
                  const items = dropdownMenu.querySelectorAll('a');

                  items.forEach((item) => {
                    const text = item.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                      item.style.display = 'block';
                    } else {
                      item.style.display = 'none';
                    }
                  });
                });

              });
            </script>

          </div>
        </nav>

        <div class="relative mt-6 max-w-lg mx-auto"> </div>


      </div>
    </header>

    <div :class="cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'"
      class="fixed right-0 top-0 max-w-xs w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300 !z-9999"
      style="z-index: 9999 !important">
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
    </div>

    <main class="my-8">
      <div class="container mx-auto px-6">
        {{-- <x-breadcrumb /> --}}
        {{ $slot }}
      </div>


    </main>
  </div>

  <footer class="bg-gray-200">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
      <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">Brand</a>
      <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
    </div>
  </footer>
  </div>

</body>

</html>
