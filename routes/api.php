<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CaptainController;
use App\Http\Controllers\API\MainController;

use App\Events\Message;

    Route::post('/messages', [App\Http\Controllers\MessageController::class, 'message']);
    // Route::post('/messages', function(Request $request){
    //     event(
    //             new Message(
    //                 $request->input('message'),
    //                 $request->input('sender_id'), 
    //                 $request->input('receiver_id')
    //             )
    //         );
    //     return ['status'        => "success"];
    // });
// Route::group(['prefix' => 'captain'], function () {
    Route::post("login",[MainController::class, 'login']);
    Route::post("register",[MainController::class, 'register']);
    Route::post("verify_otp",[MainController::class, 'verify_otp']);
    
    Route::post("forgot",[MainController::class, 'forgot']);
    Route::post("forgot_otp",[MainController::class, 'forgot_otp']);
    Route::post("update_password",[MainController::class, 'update_password']);
    
    
    Route::post("toggle_role",[MainController::class, 'toggle_role']);
    Route::group(['middleware' => 'auth:sanctum'], function(){
        Route::post("store_details",[MainController::class, 'store_details']);  // to become captain

        Route::post("store_schedule",[MainController::class, 'store_schedule']);
        Route::post("fetch_schedules",[MainController::class, 'fetch_schedules']);

        Route::post("fetch_schedule_by_people",[MainController::class, 'fetch_schedule_by_people']);
        Route::post("fetch_schedule_by_city",[MainController::class, 'fetch_schedule_by_city']);
        Route::post("fetch_schedule_by_date",[MainController::class, 'fetch_schedule_by_date']);
        Route::post("fetch_schedule_by_time",[MainController::class, 'fetch_schedule_by_time']);


        
        Route::post("cancel_booking",[MainController::class, 'cancel_booking']);
        Route::post("cancel_schedule",[MainController::class, 'cancel_schedule']);


        Route::post("store_booking",[MainController::class, 'store_booking']);

        Route::post("fetch_booking",[MainController::class, 'fetch_booking']);
        Route::post("fetch_bookings",[MainController::class, 'fetch_bookings']);

        Route::post("fetch_cancel_reasons",[MainController::class, 'fetch_cancel_reasons']);
        Route::post("fetch_provinces",[MainController::class, 'fetch_provinces']);
        Route::post("fetch_ratings",[MainController::class, 'fetch_ratings']);

    
        // Route::get("chart/{captain_id}",[CaptainController::class, 'charts']);
        Route::get("fetch_cities",[MainController::class, 'fetch_cities']);
        Route::post("logout",[MainController::class, 'logout']);
    });
    
// });