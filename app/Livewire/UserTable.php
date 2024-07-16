<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use App\Models\Ville;


final class UserTable extends PowerGridComponent
{
    use WithExport;

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

    public function datasource(): Builder
    {
        return User::with('ville');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('ville.name')
            ->add('photo')
            ->add('sexe')
            ->add('profile')
            ->add('phone')
            ->add('is_complete')
            ->add('social_id')
            ->add('social_type')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            //Column::make('Id', 'id'),

             Column::make('Nom', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Email', 'email')
                ->sortable()
                ->searchable(),
                Column::make('Ville', 'ville.name')
                ->sortable(),
                
            Column::make('Genre', 'sexe')
                ->sortable()
                ->searchable(),

            Column::make('Profile', 'profile')
                ->sortable()
                ->searchable(),

            Column::make('Telephone', 'phone')
                ->sortable()
                ->searchable(),

            Column::make('Is complete', 'is_complete')
                ->sortable()
                ->searchable(),

            //Column::make('Social id', 'social_id')->sortable()->searchable(),

            Column::make('Social type', 'social_type')
                ->sortable()
                ->searchable(),

            //Column::make('Created at', 'created_at_formatted', 'created_at')->sortable(),

            Column::make('Created at', 'created_at')
                ->sortable()
                ->searchable(),

            //Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

/*     public function actions(User $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit: '.$row->id)
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('edit', ['rowId' => $row->id])
        ];
    } */

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
