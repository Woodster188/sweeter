<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\Notifications;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/notifications', Notifications::class)->name('notifications');
