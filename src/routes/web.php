<?php

use Illuminate\Support\Facades\Route;
use Namviet\Account\Http\Controllers\AccountController;

Route::get('account/settings', [AccountController::class, 'settings'])->name('account.settings');
