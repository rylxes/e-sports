<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::group(['middleware' => ['cors', 'json.response']], function () {
Route::group(['middleware' => ['cors', 'json.response']], function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });


/// AUTH ROUTES
    Route::post('login', 'App\Http\Controllers\API\Auth\LoginController@login');
    Route::post('logout', 'App\Http\Controllers\API\Auth\LoginController@logout')->name('logout');
    Route::post('register', 'App\Http\Controllers\API\Auth\RegisterController@register');
    Route::post('password/email', 'App\Http\Controllers\API\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'App\Http\Controllers\API\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'App\Http\Controllers\API\Auth\ResetPasswordController@reset')->name('password.update');
    Route::post('password/confirm', 'App\Http\Controllers\API\Auth\ConfirmPasswordController@confirm');
    Route::get('email/verify/{id}/{hash}', 'App\Http\Controllers\API\Auth\VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'App\Http\Controllers\API\Auth\VerificationController@resend')->name('verification.resend');

    Route::middleware('auth:api')->group(function () {
        Route::resource('club_assesments', App\Http\Controllers\API\ClubAssesmentAPIController::class);
        Route::resource('personal_details', App\Http\Controllers\API\PersonalDetailsAPIController::class);
        Route::resource('videos', App\Http\Controllers\API\VideoAPIController::class);
        Route::resource('video_types', App\Http\Controllers\API\VideoTypeAPIController::class);
        Route::resource('sports', App\Http\Controllers\API\SportAPIController::class);
        Route::resource('health_predictors', App\Http\Controllers\API\HealthPredictorAPIController::class);
        Route::resource('psych_predictors', App\Http\Controllers\API\PsychPredictorAPIController::class);
        Route::resource('skill_reports', App\Http\Controllers\API\SkillReportAPIController::class);
        Route::resource('skill_tests', App\Http\Controllers\API\SkillTestAPIController::class);
        Route::resource('countries', App\Http\Controllers\API\CountryAPIController::class);
        Route::resource('states', App\Http\Controllers\API\StateAPIController::class);
        Route::get('states/byCountry/{id}', 'App\Http\Controllers\API\StateAPIController@byCountry');
    });

});





