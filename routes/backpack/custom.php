<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => [
        config('backpack.base.web_middleware', 'web'),
        config('backpack.base.middleware_key', 'admin'),
    ],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('offer', 'OfferCrudController');
    Route::crud('image', 'ImageCrudController');
    Route::crud('facilitie', 'FacilitieCrudController');
    Route::crud('demand', 'DemandCrudController');
    Route::crud('client', 'ClientCrudController');
}); // this should be the absolute last line of this file