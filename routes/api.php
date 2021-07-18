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
//    Route::middleware('auth:api')->get('/user', function (Request $request) {
//        return $request->user();
//    });


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


    Route::get('states/byCountry/{id}', 'App\Http\Controllers\API\StateAPIController@byCountry');
    Route::post('cities/byState', 'App\Http\Controllers\API\CityAPIController@byState');
    Route::resource('countries', App\Http\Controllers\API\CountryAPIController::class);
    //Route::resource('states', App\Http\Controllers\API\StateAPIController::class);
    //Route::resource('cities', App\Http\Controllers\API\CityAPIController::class);
//
//
    Route::post('talent/register', 'App\Http\Controllers\API\TalentAPIController@store');
    Route::post('coaches/register', 'App\Http\Controllers\API\CoachAPIController@store');
    Route::post('scouts/register', 'App\Http\Controllers\API\ScoutAPIController@store');
    Route::post('agents/register', 'App\Http\Controllers\API\AgentAPIController@store');
    Route::post('academies/register', 'App\Http\Controllers\API\AcademyAPIController@store');
    Route::post('performance_coaches/register', 'App\Http\Controllers\API\PerformanceCoachAPIController@store');

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

        Route::post('talent/uploadProfile', 'App\Http\Controllers\API\TalentAPIController@uploadProfile');
        Route::post('talent/uploadPictures', 'App\Http\Controllers\API\TalentAPIController@uploadPictures');
        Route::resource('talent', App\Http\Controllers\API\TalentAPIController::class);
        Route::post('coaches/uploadProfile', 'App\Http\Controllers\API\CoachAPIController@uploadProfile');
        Route::post('coaches/uploadPictures', 'App\Http\Controllers\API\CoachAPIController@uploadPictures');
        Route::resource('coaches', App\Http\Controllers\API\CoachAPIController::class);

        Route::post('scouts/uploadProfile', 'App\Http\Controllers\API\ScoutAPIController@uploadProfile');
        Route::post('scouts/uploadPictures', 'App\Http\Controllers\API\ScoutAPIController@uploadPictures');
        Route::resource('scouts', App\Http\Controllers\API\ScoutAPIController::class);

        Route::post('agents/uploadProfile', 'App\Http\Controllers\API\AgentAPIController@uploadProfile');
        Route::post('agents/uploadPictures', 'App\Http\Controllers\API\AgentAPIController@uploadPictures');
        Route::resource('agents', App\Http\Controllers\API\AgentAPIController::class);
        Route::post('performance_coaches/uploadProfile', 'App\Http\Controllers\API\PerformanceCoachAPIController@uploadProfile');
        Route::post('performance_coaches/uploadPictures', 'App\Http\Controllers\API\PerformanceCoachAPIController@uploadPictures');
        Route::resource('performance_coaches', App\Http\Controllers\API\PerformanceCoachAPIController::class);


        Route::post('academies/uploadProfile', 'App\Http\Controllers\API\AcademyAPIController@uploadProfile');
        Route::post('academies/uploadPictures', 'App\Http\Controllers\API\AcademyAPIController@uploadPictures');
        Route::resource('academies', App\Http\Controllers\API\AcademyAPIController::class);

    });

});










