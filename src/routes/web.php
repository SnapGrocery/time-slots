
<?php

use Illuminate\Support\Facades\Route;
use YourNamespace\TimeSlotManager\Http\Controllers\TimeSlotController;

Route::middleware(['web', 'auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('time-slots', [TimeSlotController::class, 'index'])->name('time-slots.index');
    Route::post('time-slots', [TimeSlotController::class, 'store'])->name('time-slots.store');
    Route::delete('time-slots/{timeSlot}', [TimeSlotController::class, 'destroy'])->name('time-slots.destroy');
});
