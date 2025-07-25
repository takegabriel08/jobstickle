<?php

use App\Livewire\Listings;
use App\Livewire\ShowLogin;
use App\Livewire\ShowRegister;
use App\Livewire\ShowEditListing;
use App\Livewire\ShowCreateListing;
use App\Livewire\ShowRegisterLogin;
use Illuminate\Support\Facades\Route;
use App\Livewire\Listing as ListingController;
use App\Livewire\ManageListings;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Listings::class)->name('home');
Route::get('/listings/create', ShowCreateListing::class)->middleware('auth')->name('create-job');
Route::get('/listings/{listing}/edit', ShowEditListing::class)->middleware('auth')->name('edit-job');
Route::get('/listings/manage', ManageListings::class)->middleware('auth')->name('manage-jobs');
Route::get('/listings/{listing}', ListingController::class);
Route::get('/login', ShowLogin::class)->name('login')->middleware('guest');;
Route::get('/register', ShowRegister::class)->name('register')->middleware('guest');
