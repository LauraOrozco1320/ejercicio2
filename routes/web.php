<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelerController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\OriginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('travelers', [TravelerController::class, 'index'])->name('travelers.index');
Route::get('travelers/create', [TravelerController::class, 'create'])->name('travelers.create');
Route::post('travelers', [TravelerController::class, 'store'])->name('travelers.store');
Route::get('travelers/{traveler}', [TravelerController::class, 'show'])->name('travelers.show');
Route::get('travelers/{traveler}/edit', [TravelerController::class, 'edit'])->name('travelers.edit');
Route::put('travelers/{traveler}', [TravelerController::class, 'update'])->name('travelers.update');
Route::delete('travelers/{traveler}', [TravelerController::class, 'destroy'])->name('travelers.destroy');

Route::get('journeys', [JourneyController::class, 'index'])->name('journeys.index');
Route::get('journeys/create', [JourneyController::class, 'create'])->name('journeys.create');
Route::post('journeys', [JourneyController::class, 'store'])->name('journeys.store');
Route::get('journeys/{journey}', [JourneyController::class, 'show'])->name('journeys.show');
Route::get('journeys/{journey}/edit', [JourneyController::class, 'edit'])->name('journeys.edit');
Route::put('journeys/{journey}', [JourneyController::class, 'update'])->name('journeys.update');
Route::delete('journeys/{journey}', [JourneyController::class, 'destroy'])->name('journeys.destroy');

Route::get('destinations', [DestinationController::class, 'index'])->name('destinations.index');
Route::get('destinations/create', [DestinationController::class, 'create'])->name('destinations.create');
Route::post('destinations', [DestinationController::class, 'store'])->name('destinations.store');
Route::get('destinations/{destination}', [DestinationController::class, 'show'])->name('destinations.show');
Route::get('destinations/{destination}/edit', [DestinationController::class, 'edit'])->name('destinations.edit');
Route::put('destinations/{destination}', [DestinationController::class, 'update'])->name('destinations.update');
Route::delete('destinations/{destination}', [DestinationController::class, 'destroy'])->name('destinations.destroy');

Route::get('origins', [OriginController::class, 'index'])->name('origins.index');
Route::get('origins/create', [OriginController::class, 'create'])->name('origins.create');
Route::post('origins', [OriginController::class, 'store'])->name('origins.store');
Route::get('origins/{origin}', [OriginController::class, 'show'])->name('origins.show');
Route::get('origins/{origin}/edit', [OriginController::class, 'edit'])->name('origins.edit');
Route::put('origins/{origin}', [OriginController::class, 'update'])->name('origins.update');
Route::delete('origins/{origin}', [OriginController::class, 'destroy'])->name('origins.destroy');
