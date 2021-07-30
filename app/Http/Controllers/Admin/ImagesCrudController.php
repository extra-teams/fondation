<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImagesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ImagesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ImagesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Images::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/images');
        CRUD::setEntityNameStrings('images', 'images');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn(
            [
                'label' => "legende",
                'name' => "legende",
                'type' => 'text'
            ]
        );

        $this->crud->addColumn(
            [
                'label' => "image",
                'name' => "fichier",
                'type' => 'image'
            ]
        );

        $this->crud->addColumn(
            [
                'label' => "tags",
                'type' => 'select',
                'name' => 'tag_id',
                'entity' => 'tags', // the method that defines the relationship in your Model
                'model' => "App\Models\Tags",
                'attribute' => 'nom', // foreign key attribute that is shown to user
            ]
        );
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ImagesRequest::class);

        $this->crud->addField(
            [
                'label' => "legende",
                'name' => "legende",
                'type' => 'text'
            ]
        );

        $this->crud->addField(
            [
                'label' => "image",
                'name' => "fichier",
                'type' => 'image'
            ]
        );

        $this->crud->addField(
            [
                'label' => "tags",
                'type' => 'select2',
                'name' => 'tag_id',
                'entity' => 'tags', // the method that defines the relationship in your Model
                'model' => "App\Models\Tags",
                'attribute' => 'nom', // foreign key attribute that is shown to user
                'default' => 1, // set the default value of the select2
            ]
        );
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
