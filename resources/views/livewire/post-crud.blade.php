@section('title', 'post')
<div>





  <input wire:model="search" type="search" placeholder="Search posts by title..." class="form-control mb-3" />

  <button wire:click="create" class="btn btn-primary mb-3">Create Post</button>

  @if ($isCreate || $isEdit)

    <x-card class="px-5 py-2" title="{{ $isEdit ? 'Edit Post' : 'Create Post' }}" :color="[
        'root' => 'bg-white dark:bg-secondary-900',
        'footer' => 'bg-transparent',
        'text' => 'text-secondary-700 dark:text-secondary-400',
        'border' => 'border-secondary-200 dark:border-secondary-600',
    ]" x-data="{ uploading: false, progress: 0 }"
      x-on:livewire-upload-start="uploading = true" x-on:livewire-upload-finish="uploading = false"
      x-on:livewire-upload-cancel="uploading = false" x-on:livewire-upload-error="uploading = false"
      x-on:livewire-upload-progress="progress = $event.detail.progress">
      <x-errors class="mb-4" />

      <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
        <!-- Title Input -->
        <x-input label="Title" placeholder="Enter title" wire:model="title" />
        @error('title')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <!-- Content Input -->
        <x-textarea label="Content" placeholder="Enter content" wire:model="content" rows="5" />
        @error('content')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <div class="mt-4">
        <!-- Image Upload -->
        <x-input label="Image" type="file" wire:model="image" />
        @if ($image)
          <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail mt-2" width="200">
        @elseif($isEdit && $postId && $image)
          <img src="{{ asset($image) }}" class="img-thumbnail mt-2" width="200">
        @endif
        @error('image')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        @error('image.*')
          <span class="error">{{ $message }}</span>
        @enderror

        <button type="button" wire:click="$cancelUpload('image')">Cancel Upload</button>

        <div x-show="uploading">
          <progress max="100" x-bind:value="progress"></progress>
        </div>

      </div>

      <x-slot name="footer" class="flex items-center justify-end gap-x-8">
        <x-button wire:click="resetInput" label="Cancel" teal flat />
        {{ $isCreate }}
        @if ($isCreate)
          <x-button wire:click="{{ $isEdit ? 'update' : 'store' }}" label="Save" teal />
        @else
          <x-button wire:click="{{ $isEdit ? 'update' : 'store' }}" label="Edit" teal />
        @endif


      </x-slot>

    </x-card>
  @elseif($isShow)
    <div>
      <h3>{{ $title }}</h3>
      <p>{{ $content }}</p>
      @if ($image)
        <img src="{{ asset($image) }}" class="img-thumbnail mt-2" width="200">
      @endif

      <div wire:loading wire:target="photo">Uploading...</div>


      <button wire:click="resetInput" class="btn btn-secondary">Close</button>
    </div>
  @else
    <h3>Search Results:</h3>
    <livewire:post-table />
    <hr>
    <ul class="list-group">
      @foreach ($posts as $post)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div>
            @if ($editPostId == $post->id)
              <!-- Inline Editing untuk Title -->
              <input type="text" wire:model="title" class="form-control" />
              {{-- <strong>{{ $post->title }}</strong> --}}
            @else
              {{ $post->title }}
            @endif

            @if ($post->image)
              <img src="{{ asset($post->image) }}" class="img-thumbnail ms-2" width="50">
            @endif
          </div>
          <div>
            @if ($editPostId == $post->id)
              <button wire:click="update({{ $post->id }})" class="btn btn-success">Save</button>
              <button wire:click="cancelEdit" class="btn btn-danger">Cancel</button>
            @else
              <button wire:click="show({{ $post->id }})" class="btn btn-info btn-sm">View</button>
              <button wire:click="edit({{ $post->id }})" class="btn btn-warning btn-sm">Edit</button>
              <button wire:click="delete({{ $post->id }})" class="btn btn-danger btn-sm">Delete</button>
            @endif

          </div>
        </li>
      @endforeach
    </ul>
  @endif

  @if (session()->has('message'))
    <div class="alert alert-success mt-3">
      {{ session('message') }}
    </div>
  @endif


  @script
  @endscript


</div>
