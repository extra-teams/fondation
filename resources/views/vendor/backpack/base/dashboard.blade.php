@extends(backpack_view('blank'))

@php
    /* compter */
    $commandesEnAttenteCount = App\Models\Commande::where('status','=',0)->count();
    $commandesEnCoursCount = App\Models\Commande::where('status','=',1)->count();


    $productCount = App\Models\Produits::count();
    $userCount = App\Clients::count();
    $lastProduits = App\Models\Produits::orderBy('created_at', 'DESC')->first();

     // notice we use Widget::add() to add widgets to a certain group
    Widget::add()->to('before_content')->type('div')->class('row')->content([
        // notice we use Widget::make() to add widgets as content (not in a group)
        Widget::make()
            ->type('progress')
            ->class('card border-0 text-white bg-primary')
            ->progressClass('progress-bar')
            ->value($userCount)
            ->description('Clients inscrits.')
            ->progress(100*(int)$userCount/1000),
        // alternatively, to use widgets as content, we can use the same add() method,

        // both Widget::make() and Widget::add() accept an array as a parameter
        // if you prefer defining your widgets as arrays
        Widget::make([
            'type' => 'progress',
            'class'=> 'card border-0 text-white bg-dark',
            'progressClass' => 'progress-bar',
            'value' => $productCount,
            'description' => 'Produits.',
            'progress' => (int)$productCount/75*100,
        ]),
         Widget::make([
            'type' => 'progress',
            'class'=> 'card border-0 text-white bg-info',
            'progressClass' => 'progress-bar',
            'value' => $commandesEnCoursCount,
            'description' => 'Commande en attente.',
            'progress' => (int)$commandesEnAttenteCount,
        ]),
    ]);

    $widgets['before_content'][] = [
      'type' => 'div',
      'class' => 'row',
      'content' => [ // widgets
              [
                'type' => 'chart',
                'wrapperClass' => 'col-md-6',
                // 'class' => 'col-md-6',
                'controller' => \App\Http\Controllers\Admin\Charts\LatestUsersChartController::class,
                'content' => [
                    'header' => 'Les récentes nouveaux utilisateurs', // optional
                    // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional

                ]
            ],
            [
                'type' => 'chart',
                'wrapperClass' => 'col-md-6',
                // 'class' => 'col-md-6',
                'controller' => \App\Http\Controllers\Admin\Charts\NewEntriesChartController::class,
                'content' => [
                    'header' => 'Nouvelles entrées', // optional
                    // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional
                ]
            ],
        ]
    ];

@endphp

@section('content')
    {{-- In case widgets have been added to a 'content' group, show those widgets. --}}
    @include(backpack_view('inc.widgets'), [ 'widgets' => app('widgets')->where('group', 'content')->toArray() ])
@endsection