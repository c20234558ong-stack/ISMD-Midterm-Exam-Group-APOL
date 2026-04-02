<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'public::pages.index')->name('index');

Route::prefix('admin')->group(function () {

    Route::livewire('/dashboard', 'admin::pages.dashboard')->name('admin.dashboard');

});

Route::prefix('shop-owner')->group(function () {

    Route::livewire('/dashboard', 'shop-owner::pages.dashboard')->name('shop-owner.dashboard');

});

Route::prefix('employee')->group(function () {

    Route::livewire('/dashboard', 'employee::pages.dashboard')->name('employee.dashboard');

});

Broadcast::routes();

