<?php

namespace App\Livewire;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class Users extends PowerGridComponent
{
    public function datasource(): ?Collection
    {
        return collect([
            ['id' => 1, 'name' => 'Name 1', 'price' => 1.58, 'created_at' => now(),],
            ['id' => 2, 'name' => 'Name 2', 'price' => 1.68, 'created_at' => now(),],
            ['id' => 3, 'name' => 'Name 3', 'price' => 1.78, 'created_at' => now(),],
            ['id' => 4, 'name' => 'Name 4', 'price' => 1.88, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],
            ['id' => 5, 'name' => 'Name 5', 'price' => 1.98, 'created_at' => now(),],

        ]);
    }

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('price')
            ->add('created_at_formatted', function ($entry) {
                return Carbon::parse($entry->created_at)->format('d/m/Y');
            });
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),

            Column::make('Name', 'name')
                ->searchable()
                ->sortable(),

            Column::make('Price', 'price')
                ->sortable(),

            Column::make('Created', 'created_at_formatted'),

            Column::action('Action')
        ];
    }
}
