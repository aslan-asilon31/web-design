<x-content :title="$title">

  <div>

    Count: <span id="count"></span>

    <div class="flex gap-4">
      <button id="decrement" class="bg-red-600 m-8 p-8 text-white">Decrement --</button>

      <button id="increment" class="bg-green-600 m-8 p-8 text-white">Increment ++</button>
    </div>
  </div>


  @script
    <script type="text/javascript">
      let $wire = {

        count: 0,

        $watch(name, callback) {

          let oldValue = this[name];

          Object.defineProperty(this, name, {

            get: function() {
              return oldValue;

            },

            set: function(newValue) {

              let oldValueTemp = oldValue;

              oldValue = newValue;
              callback(oldValueTemp, newValue);

            },

          });

        },

        increment() {

          this.count++;

        },

        decrement() {

          this.count--;

        },

      }


      $wire.$watch('count', (oldValue, newValue) => {

        document.getElementById('count').textContent = newValue;
        alert(`Old Value: ${oldValue}, New Value: ${newValue}`);
      });


      document.getElementById('increment').addEventListener('click', () => {

        $wire.increment();

      });


      document.getElementById('decrement').addEventListener('click', () => {

        $wire.decrement();

      });

      $wire.count = 0;
    </script>


    <script>
      document.addEventListener('livewire:init', () => {})

      document.addEventListener('livewire:initialized', () => {

      })
    </script>
  @endscript

</x-content>
