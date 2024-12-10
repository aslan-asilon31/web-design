<x-content :title="$title">


  <div>
    Counter component in Alpine:

    <div x-data="counter">
      <div class="flex gap-6">
        Result : <h1 x-text="count"></h1>
      </div>
      <div class="flex gap-6">
        <button x-on:click="decrement" class="bg-purple-600 m-4 p-4 text-white ">-</button>
        <button x-on:click="increment" class="bg-purple-600 m-4 p-4 text-white ">+</button>
      </div>
    </div>

    <hr>
    <br><br><br>

    <div>
      input : <input type="text" placeholder="aaaa" class="border-4 border-green-500 outline-2 outline-red-500 p-4"
        data-picker>
    </div>

    <div wire:id="my-tab-link-component">
    </div>


  </div>

  @assets
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js" defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
  @endassets


  @script
    <script>
      new Pikaday({
        field: $wire.$el.querySelector('[data-picker]')
      });

      const counterComponent = Livewire.getByName('tab-link');
    </script>

    <script>
      Alpine.data('counter', () => {
        return {
          count: 0,
          increment() {
            this.count++
          },
          decrement() {
            this.count--
          },
        }
      })
    </script>
  @endscript


  <br>
  <hr>

  <div class="flex flex-wrap justify-center">
    <div class="w-1/2 lg:w-1/3 p-2">
      <div class="bg-gray-200">
        Item 1
      </div>
    </div>
    <div class="w-1/2 lg:w-1/3 p-2">
      <div class="bg-gray-200">
        Item 2
      </div>
    </div>
    <div class="w-1/2 lg:w-1/3 p-2">
      <div class="bg-gray-200">
        Item 3
      </div>
    </div>
    <div class="w-1/2 lg:w-1/3 p-2">
      <div class="bg-gray-200">
        Item 4
      </div>
    </div>
    <div class="w-1/2 lg:w-1/3 p-2">
      <div class="bg-gray-200">
        Item 5
      </div>
    </div>
    <div class="w-1/2 lg:w-1/3 p-2">
      <div class="bg-gray-200">
        Item 6
      </div>
    </div>
  </div>



  <br>
  <hr>

  <button wire.click="cekt">aaaaaaaaaa</button>

  <div x-data="{ count: 0 }">
    <p>Count: <span x-text="count"></span></p>
    <button x-on:click="count++">Increment</button>
    <script>
      $watch('count', (value) => {
        alert(value);
      });
    </script>
  </div>

  <script>
    window.addEventListener('swal', function(e) {
      Swal.fire(e.detail);
    });
  </script>



</x-content>
