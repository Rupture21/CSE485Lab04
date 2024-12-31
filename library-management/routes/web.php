<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

Route::resource('books', BookController::class);
Route::resource('readers', ReaderController::class);
Route::resource('borrows', BorrowController::class);
