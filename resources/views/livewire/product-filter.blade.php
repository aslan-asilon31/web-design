<div>
  <section class="py-0 relative">
    <div class="w-full max-w-7xl mx-auto px-4 md:px-8">

      {{-- Modal filter mobile  --}}
      <x-button class="md:hidden lg:hidden" label="Filter" x-on:click="$openModal('cardModal')" primary />

      <x-modal-card title="Edit Customer" name="cardModal">
        <div class="col-span-12 md:col-span-3 w-full max-md:max-w-md max-md:mx-auto " id="menu-filter-web">
          <div class="box rounded-xl border border-gray-300 bg-white p-6 w-full md:max-w-sm">


            <div class="w-full mb-7">
              <div class="space-y-2">
                <details
                  class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                  <summary
                    class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                    <span
                      class="text-xs sm:text-xs sm:font-normal  md:text-sm md:font-medium lg:text-sm lg:font-medium ">
                      Availability mobile </span>

                    <span class="transition group-open:-rotate-180">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                      </svg>
                    </span>
                  </summary>

                  <div class="border-t border-gray-200 bg-white">
                    <header class="flex items-center justify-between p-4">
                      <span class="text-sm text-gray-700"> 0 Selected </span>

                      <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                        Reset
                      </button>
                    </header>

                    <ul class="space-y-1 border-t border-gray-200 p-4">
                      <li>
                        <label for="FilterInStock" class="inline-flex items-center gap-2">
                          <input type="checkbox" id="FilterInStock" class="size-5 rounded border-gray-300" />

                          <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                        </label>
                      </li>

                      <li>
                        <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                          <input type="checkbox" id="FilterPreOrder" class="size-5 rounded border-gray-300" />

                          <span class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                        </label>
                      </li>

                      <li>
                        <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                          <input type="checkbox" id="FilterOutOfStock" class="size-5 rounded border-gray-300" />

                          <span class="text-sm font-medium text-gray-700"> Out of Stock (10+) </span>
                        </label>
                      </li>
                    </ul>
                  </div>
                </details>

                <details
                  class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                  <summary
                    class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                    <span class="text-sm font-medium"> Price </span>

                    <span class="transition group-open:-rotate-180">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                      </svg>
                    </span>
                  </summary>

                  <div class="border-t border-gray-200 bg-white">
                    <header class="flex items-center justify-between p-4">
                      <span class="text-sm text-gray-700"> The highest price is $600 </span>

                      <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                        Reset
                      </button>
                    </header>

                    <div class="border-t border-gray-200 p-4">
                      <div class="flex justify-between gap-4">
                        <label for="FilterPriceFrom" class="flex items-center gap-2">
                          <span class="text-sm text-gray-600">$</span>

                          <input type="number" id="FilterPriceFrom" placeholder="From"
                            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                        </label>

                        <label for="FilterPriceTo" class="flex items-center gap-2">
                          <span class="text-sm text-gray-600">$</span>

                          <input type="number" id="FilterPriceTo" placeholder="To"
                            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                        </label>
                      </div>
                    </div>
                  </div>
                </details>
              </div>

            </div>

            <button
              class="text-xs sm:text-xs sm:font-normal  md:text-sm md:font-medium lg:text-sm lg:font-medium w-full py-2.5 flex items-center justify-center gap-2 rounded-full bg-indigo-600 text-white  shadow-sm shadow-transparent transition-all duration-500 hover:bg-indigo-700 hover:shadow-indigo-200  ">
              <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M14.4987 13.9997L13.1654 12.6663M13.832 7.33301C13.832 10.6467 11.1457 13.333 7.83203 13.333C4.51832 13.333 1.83203 10.6467 1.83203 7.33301C1.83203 4.0193 4.51832 1.33301 7.83203 1.33301C11.1457 1.33301 13.832 4.0193 13.832 7.33301Z"
                  stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              Search
            </button>
          </div>

          <div class="mt-7 box rounded-xl border border-gray-300 bg-white p-6 w-full md:max-w-sm">
            <div class="flex items-center justify-between w-full pb-3 border-b border-gray-200 mb-7">
              <p class="font-medium text-base leading-7 text-black ">Filter Plans</p>
              <p
                class="font-medium text-xs text-gray-500 cursor-pointer transition-all duration-500 hover:text-indigo-600">
                RESET</p>
            </div>



            <div class="w-full mb-7">
              <x-select class="text-xs sm:text-xs sm:font-normal  md:text-sm md:font-medium lg:text-sm lg:font-medium"
                label="Search Product 1" placeholder="Select some user" :async-data="[
                    'api' => url('/api/v1/select/product-category-firsts'),
                ]" :template="[
                    'name' => 'user-option',
                    'config' => [
                        'src' => 'image_url',
                    ],
                    'map' => [
                        'image' => 'image_url',
                    ],
                ]"
                option-label="name" option-value="id" option-description="email" />
            </div>

            <div class="w-full mb-7">
              <div class="mb-3">
                <x-label for="masterForm.product_category_first_id">Kategori</x-label>
                <x-select wire:model="masterForm.product_category_first_id" placeholder="Kategori" :async-data="[
                    'api' => url('/api/v1/select/product-category-firsts'),
                ]"
                  option-label="name" option-value="id" />
              </div>
            </div>

            <div class="w-full mb-7">
              <div class="mb-3">
                <x-label class="text-xs font-normal" for="masterForm.availability">Availability</x-label>
                <x-select wire:model="masterForm.availability" :options="[
                    ['label' => 'In Stock', 'value' => 'in-stock'],
                    ['label' => 'Out Of Stock', 'value' => 'out-of-stock'],
                ]" option-label="label"
                  placeholder="availability" option-value="value" :clearable="false" />
              </div>
            </div>

            <label for="Offer" class="font-medium text-xs leading-6 text-gray-600 mb-1">Offer</label>
            <div class="relative w-full mb-7">
              <select id="Offer"
                class="h-12 border border-gray-300 text-gray-900 text-xs font-medium rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
                <option selected>5% off upi discount</option>
                <option value="option 1">option 1</option>
                <option value="option 2">option 2</option>
                <option value="option 3">option 3</option>
                <option value="option 4">option 4</option>
              </select>
              <svg class="absolute top-1/2 -translate-y-1/2 right-4 z-50" width="16" height="16"
                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.0002 5.99845L8.00008 9.99862L3.99756 5.99609" stroke="#111827" stroke-width="1.6"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <p class="font-medium text-xs leading-6 text-black mb-3">Discount</p>
            <div class="box flex flex-col gap-2">
              <div class="flex items-center">
                <input id="checkbox-default-1" type="checkbox" value=""
                  class="w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                <label for="checkbox-default-1" class="text-xs font-normal text-gray-600 leading-4 cursor-pointer">20%
                  or more</label>
              </div>
              <div class="flex items-center">
                <input id="checkbox-default-2" type="checkbox" value=""
                  class="w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                <label for="checkbox-default-2" class="text-xs font-normal text-gray-600 leading-4 cursor-pointer">30%
                  or more</label>
              </div>
              <div class="flex items-center">
                <input id="checkbox-default-3" type="checkbox" value=""
                  class="w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                <label for="checkbox-default-3" class="text-xs font-normal text-gray-600 leading-4 cursor-pointer">50%
                  or more</label>
              </div>
            </div>
          </div>
        </div>

        <x-slot name="footer" class="flex justify-between gap-x-4">
          <x-button flat negative label="Delete" x-on:click="close" />

          <div class="flex gap-x-4">
            <x-button flat label="Cancel" x-on:click="close" />

            <x-button primary label="Save" wire:click="save" />
          </div>
        </x-slot>
      </x-modal-card>
      {{-- Modal filter mobile end  --}}

      <div class="grid grid-cols-12 ">

        <div class="hidden md:block lg:block col-span-12 md:col-span-3 w-full max-md:max-w-md max-md:mx-auto "
          id="menu-filter-web">
          <div class="box rounded-xl border border-gray-300 bg-white p-6 w-full md:max-w-sm">

            <div class="w-full mb-7">

              <div class="space-y-2">
                <details
                  class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                  <summary
                    class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                    <span
                      class="text-xs sm:text-xs sm:font-normal  md:text-sm md:font-medium lg:text-sm lg:font-medium ">
                      Availability web </span>

                    <span class="transition group-open:-rotate-180">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d=" M19.5 8.25l-7.5 7.5-7.5-7.5" />
                      </svg>
                    </span>
                  </summary>

                  <div class="border-t border-gray-200 bg-white">
                    <header class="flex items-center justify-between p-4">
                      <span class="text-sm text-gray-700"> 0 Selected </span>

                      <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                        Reset
                      </button>
                    </header>

                    <ul class="space-y-1 border-t border-gray-200 p-4">
                      <li>
                        <label for="FilterInStock" class="inline-flex items-center gap-2">
                          <input type="checkbox" id="FilterInStock" class="size-5 rounded border-gray-300" />

                          <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                        </label>
                      </li>

                      <li>
                        <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                          <input type="checkbox" id="FilterPreOrder" class="size-5 rounded border-gray-300" />

                          <span class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                        </label>
                      </li>

                      <li>
                        <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                          <input type="checkbox" id="FilterOutOfStock" class="size-5 rounded border-gray-300" />

                          <span class="text-sm font-medium text-gray-700"> Out of Stock (10+) </span>
                        </label>
                      </li>
                    </ul>
                  </div>
                </details>

                <details
                  class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                  <summary
                    class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                    <span class="text-sm font-medium"> Price </span>

                    <span class="transition group-open:-rotate-180">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                      </svg>
                    </span>
                  </summary>

                  <div class="border-t border-gray-200 bg-white">
                    <header class="flex items-center justify-between p-4">
                      <span class="text-sm text-gray-700"> The highest price is $600 </span>

                      <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                        Reset
                      </button>
                    </header>

                    <div class="border-t border-gray-200 p-4">
                      <div class="flex justify-between gap-4">
                        <label for="FilterPriceFrom" class="flex items-center gap-2">
                          <span class="text-sm text-gray-600">$</span>

                          <input type="number" id="FilterPriceFrom" placeholder="From"
                            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                        </label>

                        <label for="FilterPriceTo" class="flex items-center gap-2">
                          <span class="text-sm text-gray-600">$</span>

                          <input type="number" id="FilterPriceTo" placeholder="To"
                            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                        </label>
                      </div>
                    </div>
                  </div>
                </details>
              </div>

            </div>

            <button
              class="text-xs sm:text-xs sm:font-normal  md:text-sm md:font-medium lg:text-sm lg:font-medium w-full py-2.5 flex items-center justify-center gap-2 rounded-full bg-indigo-600 text-white  shadow-sm shadow-transparent transition-all duration-500 hover:bg-indigo-700 hover:shadow-indigo-200  ">
              <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M14.4987 13.9997L13.1654 12.6663M13.832 7.33301C13.832 10.6467 11.1457 13.333 7.83203 13.333C4.51832 13.333 1.83203 10.6467 1.83203 7.33301C1.83203 4.0193 4.51832 1.33301 7.83203 1.33301C11.1457 1.33301 13.832 4.0193 13.832 7.33301Z"
                  stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              Search
            </button>
          </div>

          <div class="mt-7 box rounded-xl border border-gray-300 bg-white p-6 w-full md:max-w-sm">
            <div class="flex items-center justify-between w-full pb-3 border-b border-gray-200 mb-7">
              <p class="font-medium text-base leading-7 text-black ">Filter Plans</p>
              <p
                class="font-medium text-xs text-gray-500 cursor-pointer transition-all duration-500 hover:text-indigo-600">
                RESET</p>
            </div>



            <div class="w-full mb-7">
              <x-select class="text-xs sm:text-xs sm:font-normal  md:text-sm md:font-medium lg:text-sm lg:font-medium"
                label="Search Product 2" placeholder="Select some user" :async-data="[
                    'api' => url('/api/v1/select/product-category-firsts'),
                ]" :template="[
                    'name' => 'user-option',
                    'config' => [
                        'src' => 'image_url',
                    ],
                    'map' => [
                        'image' => 'image_url',
                    ],
                ]"
                option-label="name" option-value="id" option-description="email" />
            </div>

            <div class="w-full mb-7">
              <div class="mb-3">
                <x-label for="masterForm.product_category_first_id">Kategori</x-label>
                <x-select wire:model="masterForm.product_category_first_id" placeholder="Kategori" :async-data="[
                    'api' => url('/api/v1/select/product-category-firsts'),
                ]"
                  option-label="name" option-value="id" />
              </div>

            </div>





            <div class="w-full mb-7">
              <div class="mb-3">
                <x-label class="text-xs font-normal" for="masterForm.availability">Availability</x-label>
                <x-select wire:model="masterForm.availability" :options="[
                    ['label' => 'In Stock', 'value' => 'in-stock'],
                    ['label' => 'Out Of Stock', 'value' => 'out-of-stock'],
                ]" option-label="label"
                  placeholder="availability" option-value="value" :clearable="false" />
              </div>
            </div>


            <label for="Offer" class="font-medium text-xs leading-6 text-gray-600 mb-1">Offer</label>
            <div class="relative w-full mb-7">
              <select id="Offer"
                class="h-12 border border-gray-300 text-gray-900 text-xs font-medium rounded-full block w-full py-2.5 px-4 appearance-none relative focus:outline-none bg-white">
                <option selected>5% off upi discount</option>
                <option value="option 1">option 1</option>
                <option value="option 2">option 2</option>
                <option value="option 3">option 3</option>
                <option value="option 4">option 4</option>
              </select>
              <svg class="absolute top-1/2 -translate-y-1/2 right-4 z-50" width="16" height="16"
                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.0002 5.99845L8.00008 9.99862L3.99756 5.99609" stroke="#111827" stroke-width="1.6"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <p class="font-medium text-xs leading-6 text-black mb-3">Discount</p>
            <div class="box flex flex-col gap-2">
              <div class="flex items-center">
                <input id="checkbox-default-1" type="checkbox" value=""
                  class="w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                <label for="checkbox-default-1" class="text-xs font-normal text-gray-600 leading-4 cursor-pointer">20%
                  or more</label>
              </div>
              <div class="flex items-center">
                <input id="checkbox-default-2" type="checkbox" value=""
                  class="w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                <label for="checkbox-default-2" class="text-xs font-normal text-gray-600 leading-4 cursor-pointer">30%
                  or more</label>
              </div>
              <div class="flex items-center">
                <input id="checkbox-default-3" type="checkbox" value=""
                  class="w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('https://pagedone.io/asset/uploads/1689406942.svg')]">
                <label for="checkbox-default-3" class="text-xs font-normal text-gray-600 leading-4 cursor-pointer">50%
                  or more</label>
              </div>
            </div>
          </div>
        </div>

        <div class="col-span-12 md:col-span-9">
          <h6
            class="text-xs sm:text-xs sm:font-normal  md:text-sm md:font-medium lg:text-sm lg:font-medium text-base leading-7 pl-6 text-black mb-5">
            Hasil pencarian untuk : <b class="text-red-600">{{ $query }}</b> </h6>

          <!-- Begin product grid -->
          <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6 md:ml-8 lg:ml-8">
            @forelse ($products as $product)
              <div
                class="relative w-full max-w-xs overflow-hidden rounded-lg bg-white shadow-[4px_4px_10px_6px_rgba(1,1,0,0.1)]">
                <a href="#">
                  <img class=" rounded-t-lg object-cover mt-6" src="{{ $product->image_url }}" alt="product image" />
                </a>
                <span
                  class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 {{ $product->availability == 'in-stock' ? 'bg-green-600 text-white' : 'bg-red-600 text-white' }} text-center text-xs ">
                  {{ $product->availability }}
                </span>
                <div class="mt-4 px-5 pb-5">
                  <a href="#">
                    <h5 class="text-xs sm:text-xs md:text-md lg:text-md font-semibold tracking-tight text-slate-900">
                      {{ $product->name }}
                    </h5>
                  </a>
                  <div class="mt-2.5 mb-5 flex items-center">
                  </div>
                  <div class="flex items-center justify-between">
                    <p>
                      <span class="text-xs sm:text-xs md:text-md lg:text-md font-bold text-slate-900">
                        Rp {{ $product->selling_price }}
                      </span>
                    </p>
                    <a href="#"
                      class="flex items-center rounded-md bg-slate-900 px-2 py-2 text-center text-xs font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                      add to cart
                    </a>
                  </div>
                </div>
              </div>
            @empty
              <h1>Empty</h1>
            @endforelse
          </div>
          <!-- End product grid -->
        </div>


      </div>
  </section>

</div>
