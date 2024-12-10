<div>


  <div>
    <x-label for="provinces">Provinces </x-label>

    <!-- Menampilkan data menggunakan x-select -->
    <x-select wire:model="selectedProvince" placeholder="Select Province">
      <option value="">Select Province</option> <!-- Opsi default -->

      <!-- Loop untuk menampilkan provinces -->
      @foreach ($provinces as $province)
        <option value="{{ $province['id'] }}">{{ $province['name'] }}</option>
      @endforeach
    </x-select>
  </div>


  <!-- Menampilkan dropdown regensi setelah provinsi dipilih -->
  @if ($selectedProvince)
    <div>
      <x-label for="regencies">Regency</x-label>
      <x-select wire:model="selectedRegency" placeholder="Select Regency">
        <option value="">Select Regency</option>
        @foreach ($regencies as $regency)
          <option value="{{ $regency['id'] }}">{{ $regency['name'] }}</option>
        @endforeach
      </x-select>
    </div>
  @endif
</div>
