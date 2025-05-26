<?php

use App\Livewire\User\UserList;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', UserList::class)->name('users');
