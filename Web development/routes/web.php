<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AddToCartComponent;
use App\Http\Livewire\BeveragedetailComponent;
use App\Http\Livewire\DishComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\FormComp;
use App\Http\Livewire\user\UserDashboardComponent;
use App\Http\Livewire\admin\AdminDashboardComponent;
use App\Http\Livewire\DishesDetailComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/form',FormComp::class)->name('form');
Route::get('/dishdetail/{slug}',DishesDetailComponent::class)->name('dishdetail');
Route::get('/beveragedetail/{slug}',BeveragedetailComponent::class)->name('beveragedetail');
Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/foods/{slug}',DetailsComponent::class)->name('foods.details');
Route::get('/addtocart/{name}',AddToCartComponent::class)->name('addtocart');
Route::get('/addtocart',AddToCartComponent::class)->name('addtocart1');
Route::get('/dish',DishComponent::class)->name('dish');
Route::get('/contact',ContactComponent::class)->name('contact');


/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::middleware(['auth'])->group(function(){

    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

Route::middleware(['auth','authadmin'])->group(function(){

    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
