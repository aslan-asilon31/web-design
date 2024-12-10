<?php

namespace App\Livewire\Pages\ProductCategoryFirsts\Forms;

use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\Form;

class ProductCategoryFirstForm extends Form
{
  // public string|null $product_category_second_id = null;
  public string|null $name = null;
  public string|null $url = null;
  public TemporaryUploadedFile|string|null $image_url = null;
  public int|null $is_activated = 1;

  public function rules(string|null $id = null): array
  {
    return [
      // 'masterForm.product_category_second_id' => 'required|string',
      'masterForm.name' => 'required|string',
      'masterForm.image_url' => [
        'nullable',
        new \App\Rules\StringOrImageRule,
      ],
      'masterForm.is_activated' => 'required|bool',
    ];
  }

  public function attributes(): array
  {
    return [
      'masterForm.product_category_second_id' => 'Product Category 2',
      'masterForm.name' => 'Name',
      'masterForm.image_url' => 'Image',
      'masterForm.is_activated' => 'Is Activated',
    ];
  }
}
