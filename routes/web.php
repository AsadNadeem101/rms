<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::group(['middleware' => 'auth'], function (){
    

    Route::get('/dashboard', function(){
        return view('welcome');
    });

    Route::get('/', function(){
        return view('welcome');
    });

    //Region
    Route::resource('regions','RegionController');

    //Approver
    Route::resource('approvers','ApproverController');

    //First Dropdown
    Route::resource('first_dropdowns','FirstDropdownController');

    //Second Dropdown
    Route::resource('second_dropdowns','SecondDropdownController');
   
    //Profile
    Route::group(['prefix' => 'profile'], function (){
        Route::get('',function(){
            return view('profile.index');
        });
        Route::get('change-password',function(){
            return view('profile.change-password');
        });
        Route::post('change_password','Auth\ForgotPasswordController@changePassword')->name('change_password');
    });
    
});

