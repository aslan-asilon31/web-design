<div>
  <form wire:submit.prevent="save" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Card component -->
    <x-card class="px-5 py-2" title="Personal Information" :color="[
        'root' => 'bg-white dark:bg-secondary-900',
        'footer' => 'bg-transparent',
        'text' => 'text-secondary-700 dark:text-secondary-400',
        'border' => 'border-secondary-200 dark:border-secondary-600',
    ]">
      <x-errors class="mb-4" />

      <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">

        <!-- First Name Input -->
        <x-input label="First Name" placeholder="Your Name" wire:model="form.first_name" />

        <!-- Province Selector -->
        <div>
          <x-label for="form.provinces">Provinces</x-label>
          <x-select wire:model="form.provinces" placeholder="Select Province" :async-data="[
              'api' => url('/api/provinces'),
          ]" option-label="name"
            option-value="id" />
        </div>

        <!-- Image Upload -->
        <div class="mb-3">
          <x-label for="form.image">Image</x-label>
          <x-image-upload wire:model="form.image" placeholder="Image URL" />
        </div>

        <!-- File Upload -->
        <div class="mb-3">
          <x-label for="form.file">File</x-label>
          <input type="file" wire:model="form.file" accept="*/*" />
        </div>

      </div>

      <!-- Footer Actions -->
      <x-slot name="footer" class="flex items-center justify-end gap-x-3">
        <x-button wire:click="cancel" label="Cancel" teal flat />
        <x-button wire:click="save" label="Save" spinner="save" teal />
      </x-slot>
    </x-card>

    <!-- Success Message -->
    @if (session()->has('message'))
      <div class="mt-4 text-green-500">
        {{ session('message') }}
      </div>
    @endif
  </form>

  <button wire:confirm="Are you sure?" wire:click="delete">Delete post</button>

  <script>
    let component = Livewire.find(id);
    alert(component);
  </script>

  <!-- AlpineJS: Alert on Province Selection (Optional) -->
  <script>
    @this.on('provinceSelected', province => {
      alert(`You selected province: ${province.name}`);
    });


    Livewire.directive('confirm', ({
      el,
      directive,
      component,
      cleanup
    }) => {
      let content = directive.expression

      let onClick = e => {
        if (!confirm(content)) {
          e.preventDefault()
          e.stopImmediatePropagation()
        }
      }

      el.addEventListener('click', onClick, {
        capture: true
      })

      // Register any cleanup code inside `cleanup()` in the case
      // where a Livewire component is removed from the DOM while
      // the page is still active.
      cleanup(() => {
        el.removeEventListener('click', onClick)
      })
    })
  </script>
</div>
