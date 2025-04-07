<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
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
    Route::crud('category', 'CategoryCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('order', 'OrderCrudController');
    Route::resource('payments', PaymentController::class);
    Route::crud('permission', 'PermissionCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('role', 'RoleCrudController');
    Route::crud('role-permission', 'RolePermissionCrudController');
    Route::crud('sub-category', 'SubCategoryCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('payment', 'PaymentCrudController');
}); // this should be the absolute last line of this file