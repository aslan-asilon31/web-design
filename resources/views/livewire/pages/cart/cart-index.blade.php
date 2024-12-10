<div>

  <section class="py-24 relative">
    <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto">

      <h2 class="title font-manrope font-bold text-4xl leading-10 mb-8 text-center text-black">Shopping Cart
      </h2>
      <div class="hidden lg:grid grid-cols-2 py-6">
        <div class="font-normal text-xl leading-8 text-gray-500">Product</div>
        <p class="font-normal text-xl leading-8 text-gray-500 flex items-center justify-between">
          <span class="w-full max-w-[200px] text-center">Delivery Charge</span>
          <span class="w-full max-w-[260px] text-center">Quantity</span>
          <span class="w-full max-w-[200px] text-center">Total</span>
        </p>
      </div>

      @forelse($cart as $productId => $product)
        <div class="grid grid-cols-1 lg:grid-cols-2 min-[550px]:gap-6 border-t border-gray-200 py-6">
          <div
            class="flex items-center flex-col min-[550px]:flex-row gap-3 min-[550px]:gap-6 w-full max-xl:justify-center max-xl:max-w-xl max-xl:mx-auto">
            <div class="img-box"><img src="https://pagedone.io/asset/uploads/1701162850.png" alt="perfume bottle image"
                class="xl:w-[140px] rounded-xl object-cover"></div>
            <div class="pro-data w-full max-w-sm ">
              <h5 class="font-semibold text-xl leading-8 text-black max-[550px]:text-center">Latest N-5
                {{ $product['name'] }}
              </h5>
              <p class="font-normal text-lg leading-8 text-gray-500 my-2 min-[550px]:my-3 max-[550px]:text-center">
                Perfumes</p>
              <h6 class="font-medium text-lg leading-8 text-indigo-600  max-[550px]:text-center">Rp
                Rp {{ $product['price'] }}</h6>
            </div>
          </div>
          <div class="flex items-center flex-col min-[550px]:flex-row w-full max-xl:max-w-xl max-xl:mx-auto gap-2">
            <h6 class="font-manrope font-bold text-2xl leading-9 text-black w-full max-w-[176px] text-center">
              Rp {{ $product['delivery_charge'] }} <span
                class="text-sm text-gray-300 ml-3 lg:hidden whitespace-nowrap">(Delivery
                Charge)</span></h6>
            <div class="flex items-center w-full mx-auto justify-center">

              <button wire:click="removeFromCart({{ $productId }})"
                class="group rounded-l-full px-6 py-[18px] border border-gray-200 flex items-center justify-center shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-300 hover:bg-gray-50">
                <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                  xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                  <path d="M16.5 11H5.5" stroke="" stroke-width="1.6" stroke-linecap="round" />
                  <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                    stroke-linecap="round" />
                  <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                    stroke-linecap="round" />
                </svg>
              </button>
              <input type="text"
                class="border-y border-gray-200 outline-none text-gray-900 font-semibold text-lg w-full max-w-[118px] min-w-[80px] placeholder:text-gray-900 py-[15px] text-center bg-transparent"
                placeholder="  {{ $product['quantity'] }} ">
              <button wire:click="addToCart({{ $productId }})"
                class="group rounded-r-full px-6 py-[18px] border border-gray-200 flex items-center justify-center shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-300 hover:bg-gray-50">
                <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                  xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                  <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-width="1.6" stroke-linecap="round" />
                  <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                    stroke-linecap="round" />
                  <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                    stroke-linecap="round" />
                </svg>
              </button>
            </div>
            <h6 class="text-indigo-600 font-manrope font-bold text-2xl leading-9 w-full max-w-[176px] text-center">
              Rp {{ $product['price'] }}</h6>
          </div>
        </div>
      @empty
        <p>Keranjang kosong.</p>
      @endforelse

      <div class="bg-gray-50 rounded-xl p-6 w-full mb-8 max-lg:max-w-xl max-lg:mx-auto">
        <div class="flex items-center justify-between w-full mb-6">
          <p class="font-normal text-xl leading-8 text-gray-400">Product Total</p>
          <h6 class="font-semibold text-xl leading-8 text-gray-900">{{ array_sum(array_column($cart, 'quantity')) }}
          </h6>
        </div>
        <div class="flex items-center justify-between w-full mb-6">
          <p class="font-normal text-xl leading-8 text-gray-400">Sub Total</p>
          <h6 class="font-semibold text-xl leading-8 text-gray-900">
            Rp
            {{ array_sum(
                array_map(function ($product) {
                    return $product['quantity'] * $product['price'];
                }, $cart),
            ) }}
          </h6>
        </div>
        <div class="flex items-center justify-between w-full pb-6 border-b border-gray-200">
          <p class="font-normal text-xl leading-8 text-gray-400">Delivery Charge</p>
          <h6 class="font-semibold text-xl leading-8 text-gray-900">
            {{ number_format($this->getTotalDeliveryCharge(), 0, ',', '.') }}</h6>
        </div>
        <div class="flex items-center justify-between w-full py-6">
          <p class="font-manrope font-medium text-2xl leading-9 text-gray-900">Total</p>
          <h6 class="font-manrope font-medium text-2xl leading-9 text-indigo-500"> Rp
            {{ number_format($this->getTotalWithDelivery(), 0, ',', '.') }}</h6>
        </div>
      </div>


      <div class="flex items-center flex-col sm:flex-row justify-center gap-3 mt-8">
        <button
          class="rounded-full py-4 w-full max-w-[280px]  flex items-center bg-indigo-50 justify-center transition-all duration-500 hover:bg-indigo-100">
          <span class="px-2 font-semibold text-lg leading-8 text-indigo-600">Add Coupon Code</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
            <path d="M8.25324 5.49609L13.7535 10.9963L8.25 16.4998" stroke="#4F46E5" stroke-width="1.6"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
        <button
          class="rounded-full w-full max-w-[280px] py-4 text-center justify-center items-center bg-indigo-600 font-semibold text-lg text-white flex transition-all duration-500 hover:bg-indigo-700">Continue
          to Payment
          <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22"
            fill="none">
            <path d="M8.75324 5.49609L14.2535 10.9963L8.75 16.4998" stroke="white" stroke-width="1.6"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
    </div>
  </section>


  <hr><br><br><br>

  <div x-data="{ expanded: false }">
    <button type="button" x-on:click="expanded = ! expanded">
      <span x-show="! expanded">Show post content...</span>
      <span x-show="expanded">Hide post content...</span>
    </button>
    <div x-show="expanded">
      test post
    </div>
  </div>



  <hr><br><br><br>


  <form wire:submit="save">
    <!-- ... -->

    <input wire:model="content" type="text">

    <small>
      Character count: <span x-text="$wire.content.length"></span>
    </small>

    {{-- <input wire:model="title" type="text" x-on:blur="$wire.save()"> --}}

    <button type="submit">Save</button>
  </form>





  <hr><br><br><br>


  <div x-data="{ count: 0 }" x-init="$watch('count', (value) => { alert('data di update'); })">
    <p>Count: <span x-text="count"></span></p>
    <button x-on:click="count++">Increment</button>
  </div>


  <hr><br><br><br>



  <x-card class="px-5 py-2" title="Personal Information" :color="[
      'root' => 'bg-white dark:bg-secondary-900',
      'footer' => 'bg-transparent',
      'text' => 'text-secondary-700 dark:text-secondary-400',
      'border' => 'border-secondary-200 dark:border-secondary-600',
  ]">
    <x-errors class="mb-4" />

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
      <x-input label="First Name" placeholder="First Name" wire:model="form.first_name" />

      <x-input label="Last Name" placeholder="Last Name" wire:model="form.last_name" />

      <div class="col-span-1 space-y-6 sm:col-span-2 sm:grid sm:grid-cols-7 sm:gap-5 sm:space-y-0">
        <div class="col-span-1 sm:col-span-4">
          <x-input label="Email" placeholder="example@mail.com" wire:model="form.email" />
        </div>

        <div class="col-span-1 sm:col-span-3">
          <x-phone label="Phone" placeholder="Phone" wire:model="form.phone" />
        </div>
      </div>

      <x-select label="Country" placeholder="Country" wire:model="form.country" :options="$countries" />

      <x-datetime-picker label="Birthdate" placeholder="Birthdate" wire:model="form.birthdate" />

      <div class="col-span-1 sm:col-span-2">
        <x-input label="Street Address" placeholder="Street Address" wire:model="form.street" />
      </div>

      <div class="col-span-1 space-y-6 sm:space-y-0 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6">
        <x-input label="City" placeholder="City" wire:model="form.city" />

        <x-input label="State" placeholder="State" wire:model="form.state" />

        <x-input label="Postal Code" placeholder="Postal Code" wire:model="form.postal_code" />
      </div>

      <x-toggle label="Accept the terms and conditions" wire:model="form.terms" />
    </div>

    <x-slot name="footer" class="flex items-center justify-end gap-x-3">
      <x-button wire:click="cancel" label="Cancel" teal flat />

      <x-button wire:click="save" label="Save" spinner="save" teal />
    </x-slot>
  </x-card>




</div>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const cartData = @json($cart); // Menyisipkan data PHP ke dalam JavaScript

    Livewire.on('cartUpdated', function(cartData, operation) {
      if (operation === 'added') {
        alert('Produk telah ditambahkan ke keranjang!');
      } else if (operation === 'removed') {
        alert('Produk telah dihapus dari keranjang!');
      }

      let totalProducts = Object.values(cartData).reduce((sum, product) => sum + product.quantity, 0);
      document.getElementById('total-products').textContent = totalProducts;

      // Menghitung total harga
      let totalPrice = Object.values(cartData).reduce((sum, product) => sum + (product.quantity * product
        .price), 0);
      document.getElementById('total-price').textContent = 'Total Harga: Rp ' + totalPrice.toLocaleString();
    });


    Livewire.on('dataSaved', function() {
      alert('Data telah di tambahkan !');
    });



  });
</script>
