<?php

use App\Http\Controllers\Admin\LeadCrudController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/leads/export', [LeadCrudController::class, 'export']);
Route::post('admin/leads/import', [LeadCrudController::class, 'import']);

