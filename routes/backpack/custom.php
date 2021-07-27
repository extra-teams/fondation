<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('produits', 'ProduitsCrudController');
    Route::crud('categories', 'CategoriesCrudController');
    Route::crud('clients', 'ClientsCrudController');
    Route::crud('bonreductions', 'BonReductionsCrudController');
    Route::get('charts/weekly-users', 'Charts\WeeklyUsersChartController@response')->name('charts.weekly-users.index');
    Route::crud('sliders', 'SlidersCrudController');


    // ------------------
    // AJAX Chart Widgets
    // ------------------
    Route::get('charts/users', 'Charts\LatestUsersChartController@response');
    Route::get('charts/new-entries', 'Charts\NewEntriesChartController@response');


    Route::get('/partenaire/commandes', 'API\CommandePController@index');
    Route::get('/partenaire/commande', 'API\CommandePController@show');


    Route::crud('padev', 'PadevCrudController');
    Route::crud('padev-admin', 'PadevAdminCrudController');
    Route::crud('articles', 'ArticlesCrudController');
    Route::crud('tags', 'TagsCrudController');
    Route::crud('gallery', 'GalleryCrudController');
    Route::crud('partenaires', 'PartenairesCrudController');
}); // this should be the absolute last line of this file