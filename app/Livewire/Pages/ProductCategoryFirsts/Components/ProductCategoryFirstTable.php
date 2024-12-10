<?php

namespace App\Livewire\Pages\ProductCategoryFirsts\Components;

use App\Models\ProductCategoryFirst;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class ProductCategoryFirstTable extends PowerGridComponent
{
  public string $sortField = 'product_category_firsts.created_at';
  public string $sortDirection = 'desc';
  public string $url = '/product-category-firsts';

  public function setUp(): array
  {
    return [
      Footer::make()
        ->showPerPage()
        ->showRecordCount(),
    ];
  }

  public function datasource(): Builder
  {
    return ProductCategoryFirst::query()
      // ->join('product_category_seconds', 'product_category_firsts.product_category_second_id', 'product_category_seconds.id')
      ->select([
        'product_category_firsts.id',
        'product_category_firsts.name',
        // 'product_category_seconds.name AS product_category_seconds_name',
        'product_category_firsts.slug',
        'product_category_firsts.image_url',
        'product_category_firsts.created_by',
        'product_category_firsts.updated_by',
        'product_category_firsts.created_at',
        'product_category_firsts.updated_at',
        'product_category_firsts.is_activated',
      ]);
  }

  public function relationSearch(): array
  {
    return [];
  }

  public function fields(): PowerGridFields
  {
    return PowerGrid::fields()
      ->add('action', fn($record) => Blade::render('<x-action fieldId="' . e($record->id) . '" url="' . e($this->url) . '" :isEdit="true" />'))
      ->add('id')
      ->add('name')
      // ->add('product_category_seconds_name')
      ->add('slug')
      ->add('image_url', function ($record) {
        if ($record->image_url) {
          return Blade::render(sprintf('<x-a href="%s" target="_blank">%s</x-a>', e(url($record->image_url)), e($record->image_url)));
        } else {
          return '';
        }
      })
      ->add('created_by')
      ->add('updated_by')
      ->add('created_at')
      ->add('updated_at')
      ->add('is_activated', fn($record) => $record->is_activated ? 'Yes' : 'No');
  }

  public function columns(): array
  {
    return [

      Column::make('Action', 'action')
        ->bodyAttribute('text-center'),

      Column::make('ID', 'id')
        ->sortable(),

      Column::make('Name', 'name')
        ->sortable(),

      // Column::make('Product Category 2 Name', 'product_category_seconds_name')
      //   ->sortable(),

      Column::make('Slug', 'slug')
        ->sortable(),

      Column::make('Image url', 'image_url')
        ->sortable(),

      Column::make('Created By', 'created_by')
        ->sortable(),

      Column::make('Updated By', 'updated_by')
        ->sortable(),

      Column::make('Created At', 'created_at')
        ->sortable(),

      Column::make('Updated At', 'updated_at')
        ->sortable(),

      Column::make('Is Activated', 'is_activated')
        ->bodyAttribute('text-center')
        ->sortable(),

    ];
  }

  public function filters(): array
  {
    return [
      Filter::inputText('id', 'product_category_firsts.id')->placeholder('ID'),
      Filter::inputText('name', 'product_category_firsts.name')->placeholder('Name'),
      // Filter::inputText('product_category_seconds_name', 'product_category_seconds.name')->placeholder('Product Category 2 Name'),
      Filter::inputText('slug', 'product_category_firsts.slug')->placeholder('Slug'),
      Filter::inputText('image_url', 'product_category_firsts.image_url')->placeholder('Image URL'),
      Filter::inputText('created_by', 'product_category_firsts.created_by')->placeholder('Created By'),
      Filter::inputText('updated_by', 'product_category_firsts.updated_by')->placeholder('Updated By'),
      Filter::datepicker('created_at', 'product_category_firsts.created_at'),
      Filter::datepicker('updated_at', 'product_category_firsts.updated_at'),
      Filter::boolean('is_activated', 'product_category_firsts.is_activated')->label('Yes', 'No'),
    ];
  }
}
