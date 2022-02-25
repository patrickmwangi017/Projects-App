<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AllTestsComponent;
use App\Http\Livewire\Admin\CreateTestsComponent;
use App\Http\Livewire\Admin\ProjectAttemptsComponent;
use App\Http\Livewire\ProjectOverviewComponent;
use App\Http\Livewire\ProfileComponent;
use App\Http\Livewire\AllUsersComponent;

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

Auth::routes();

Route::get('/home', AllTestsComponent::class)->name('home');
Route::get('/new-test', CreateTestsComponent::class)->name('new-test');
Route::get('/project-details{pid}', ProjectOverviewComponent::class)->name('project-details');
Route::get('/project-attempts{project_id}', ProjectAttemptsComponent::class)->name('project-attempts');
Route::get('/profile', ProfileComponent::class)->name('profile');
Route::get('/students', AllUsersComponent::class)->name('students');
// Route::get('/home', [App\Http\Livewire\AllTestsComponent::class, 'index'])->name('home');
