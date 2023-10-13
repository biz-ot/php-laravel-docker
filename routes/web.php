<?php

//use Illuminate\Support\Facades\Cookie;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login', [
        'sitekey' => 'ttB5hBrBuc99',
        'snsdomain' => 'soc.socialloginttest.xyz',
    ]);
});

Route::get('/mypage', function () {
    $provider_user_id = '';
    $provider_user_name = '';
    $provider_user_email = '';
    $provider_user_gender = '';
    $provider_id = '';
    $adcode = '';
    $status = '';
    $provider_row = '';

    /*
    $provider_user_id = Cookie::get('provider_user_id');
    $provider_user_name = Cookie::get('provider_user_name');
    $provider_user_email = Cookie::get('provider_user_email');
    $provider_user_gender = Cookie::get('provider_user_gender');
    $provider_id = Cookie::get('provider_id');
    $adcode = Cookie::get('adcode');
    $status = Cookie::get('status');
    $provider_row = Cookie::get('provider_row');
    */

    return view('mypage', [
        'provider_user_id' => $provider_user_id,
        'provider_user_name' => $provider_user_name,
        'provider_user_email' => $provider_user_email,
        'provider_user_gender' => $provider_user_gender,
        'provider_id' => $provider_id,
        'adcode' => $adcode,
        'status' => $status,
        'provider_row' => $provider_row,
    ]);
});

Route::get('/loginerror', function () {
    return view('loginerror');
});
