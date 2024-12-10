<?php

namespace App\Livewire\Pages\ProductCategoryFirsts;

use App\Livewire\Pages\ProductCategoryFirsts\Forms\ProductCategoryFirstForm;
use App\Models\ProductCategoryFirst;
use Livewire\Component;

class ProductCategoryFirstCrud extends Component
{
  public function render()
  {
    return view('livewire.pages.product-category-firsts.product-category-first-crud')
      ->title($this->title);
  }

  public string $title = 'Product Category 1';
  public string $url = '/product-category-firsts';


  use \Livewire\WithFileUploads;
  use \App\Helpers\ImageUpload\Traits\WithImageUpload;
  use \App\Helpers\FormHook\Traits\WithFormHook;

  #[\Livewire\Attributes\Locked]
  public null|string $id = null;
  private string $model = ProductCategoryFirst::class;
  public ProductCategoryFirstForm $masterForm;

  private string $uploadFolderName = 'files/images/product-category-firsts';
  private string $baseImageName = 'product_category_first_image';

  public function create()
  {
    $this->masterForm->reset();
  }

  public function store()
  {
    $validatedForm = $this->validate(
      $this->masterForm->rules($this->id),
      [],
      $this->masterForm->attributes()
    )['masterForm'];

    $folderName = $this->uploadFolderName;
    $newImageUrl = $validatedForm['image_url'];
    $newImageName = $this->baseImageName . '-' . str($validatedForm['name'])->slug('_');
    $oldImageUrl = null;
    $validatedForm['image_url'] = $this->saveImage(
      $folderName,
      $newImageUrl,
      $newImageName,
      $oldImageUrl
    );

    $validatedForm['slug'] = str($validatedForm['name'])->slug();
    $this->model::create($validatedForm);

    session()->flash('success_notification', __('messages.created_notification_message'));
    $this->redirect($this->url, true);
  }

  public function edit()
  {
    $record = $this->model::findOrFail($this->id);
    $this->masterForm->fill($record);
  }

  public function update()
  {
    $validatedForm = $this->validate(
      $this->masterForm->rules($this->id),
      [],
      $this->masterForm->attributes()
    )['masterForm'];

    $record = $this->model::findOrFail($this->id);

    $folderName = $this->uploadFolderName;
    $newImageUrl = $validatedForm['image_url'];
    $newImageName = $this->baseImageName . '-' . str($validatedForm['name'])->slug('_');
    $oldImageUrl = $record->image_url;
    $validatedForm['image_url'] = $this->saveImage(
      $folderName,
      $newImageUrl,
      $newImageName,
      $oldImageUrl
    );

    $record->update($validatedForm);

    session()->flash('success_notification', __('messages.updated_notification_message'));
    $this->redirect($this->url, true);
  }

  public function delete()
  {
    $record = $this->model::findOrFail($this->id);

    $this->deleteImage($record->image_url);

    $record->delete();
    session()->flash('success_notification', __('messages.deleted_notification_message'));
    $this->redirect($this->url, true);
  }
}
