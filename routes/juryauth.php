<?php

use App\Http\Controllers\JuryAuth\AuthenticatedSessionController;
use App\Http\Controllers\JuryAuth\ConfirmablePasswordController;
use App\Http\Controllers\JuryAuth\EmailVerificationNotificationController;
use App\Http\Controllers\JuryAuth\EmailVerificationPromptController;
use App\Http\Controllers\JuryAuth\NewPasswordController;
use App\Http\Controllers\JuryAuth\PasswordController;
use App\Http\Controllers\JuryAuth\PasswordResetLinkController;
use App\Http\Controllers\JuryAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:jury')->group(function () {

    Route::get('jury/login', [AuthenticatedSessionController::class, 'create'])
                ->name('jury.login');

    Route::post('jury/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('jury/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('jury.password.request');

    Route::post('jury/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('jury.password.email');

    Route::get('jury/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('jury.password.reset');

    Route::post('jury/reset-password', [NewPasswordController::class, 'store'])
                ->name('jury.password.store');
});

Route::middleware('auth:jury')->group(function () {
    Route::get('jury/verify-email', EmailVerificationPromptController::class)
                ->name('jury.verification.notice');

    Route::get('jury/verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('jury.verification.verify');

    Route::post('jury/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('jury.verification.send');

    Route::get('jury/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('jury.password.confirm');

    Route::post('jury/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('jury/password', [PasswordController::class, 'update'])->name('jury.password.update');

    Route::post('jury/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('jury.logout');
});
