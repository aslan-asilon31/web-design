<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImagePreview extends Component
{
  /**
   * Create a new component instance.
   */

  public \Livewire\Features\SupportFileUploads\TemporaryUploadedFile|string|null $imageUrl;
  public bool $isTemporaryUrl = false;

  public function __construct(\Livewire\Features\SupportFileUploads\TemporaryUploadedFile|string|null $imageUrl)
  {
    $this->imageUrl = $imageUrl;
    $this->isTemporaryUrl = $imageUrl instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.image-preview');
  }
}
