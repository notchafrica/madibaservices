<?php

use App\Http\Livewire\About;
use App\Http\Livewire\Catalog\Browse;
use App\Http\Livewire\Catalog\Details;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Home;
use App\Http\Livewire\Services;
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

Route::get('/', Home::class)->name('home');
Route::get('contact-us', Contact::class)->name('contact');
Route::get('about', About::class)->name('about');
Route::get('services', Services::class)->name('services');
Route::get('catalogs', Browse::class)->name('catalogs.browse');
Route::get('catalogs/{slug}', Details::class)->name('catalogs.details');

