<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\FeatureComponent;
use App\Http\Livewire\ClassComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\SingleComponent;
use App\Http\Livewire\ContactComponent;


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
Route::get('/home', HomeComponent::class)->name('home');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/feature', FeatureComponent::class)->name('feature');
Route::get('/class', ClassComponent::class)->name('class');
Route::get('/blog', BlogComponent::class)->name('blog');
Route::get('/single', SingleComponent::class)->name('single');
Route::get('/contact', ContactComponent::class)->name('contact');

