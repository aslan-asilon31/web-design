<div>
  <div>

    <h2>Product Cart</h2>

    <div class="flex gap-4">

      @foreach ($counts as $index => $count)
        <div class="bg-gray-200 p-4 rounded">

          <h3>Product {{ $index + 1 }}</h3>

          <p>Price: ${{ $index + 1 }}0</p>

          <button wire:click="decrement({{ $index }})" class="bg-red-600 m-2 p-2 text-white">Decrement --</button>

          <span>{{ $count }}</span>

          <button wire:click="increment({{ $index }})" class="bg-green-600 m-2 p-2 text-white">Increment
            ++</button>
        </div>
      @endforeach

    </div>

    <button wire:click="addCount">Tambah Count</button>

    <button wire:click="save">Simpan Data</button>

  </div>


  @script
    <script type="text/javascript">
      let $wire = {


        counts: [],



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



        addCount() {

          this.counts.push(0);

        },



        increment(index) {

          this.counts[index]++;

        },



        decrement(index) {

          this.counts[index]--;

        },



        save() {

          Livewire.dispatch('save');

        },



      }




      $wire.$watch('counts', (oldValue, newValue) => {

        // Update nilai count pada HTML

        let html = '';

        for (let i = 0; i < newValue.length; i++) {

          html += `

          <div>

            <button id="decrement-${i}" class="bg-red-600 m-2 p-2 text-white">Decrement --</button>

            <span id="count-${i}">${newValue[i]}</span>

            <button id="increment-${i}" class="bg-green-600 m-2 p-2 text-white">Increment ++</button>

          </div>

        `;

        }

        document.getElementById('counts').innerHTML = html;

      });




      document.getElementById('add-count-button').addEventListener('click', () => {

        $wire.addCount();

      });



      document.addEventListener('click', (event) => {

        if (event.target.classList.contains('increment')) {

          let index = event.target.id.split('-')[1];

          $wire.increment(index);

        } else if (event.target.classList.contains('decrement')) {

          let index = event.target.id.split('-')[1];

          $wire.decrement(index);

        }

      });



      document.getElementById('save-button').addEventListener('click', () => {

        $wire.save();

      });
    </script>
  @endscript
</div>
