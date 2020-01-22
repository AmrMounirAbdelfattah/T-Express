<?php

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
Route::get('/T-Express_AccountSettings', function () {
    return view('ltr/T-Express_AccountSettings');
});
Route::get('/T-Express_Cart', function () {
    return view('ltr/T-Express_Cart');
});

Route::get('/T-Express_ForgotPassword', function () {
    return view('ltr/T-Express_ForgotPassword');
});
Route::get('/T-Express_Items', function () {
    return view('ltr/T-Express_Items');
});
Route::get('/T-Express_MarketPlace', function () {
    return view('ltr/T-Express_MarketPlace');
});
Route::get('/T-Express_MyFavorites', function () {
    return view('ltr/T-Express_MyFavorites');
});
Route::get('/T-Express_MyOrders-Page-1', function () {
    return view('ltr/T-Express_MyOrders-Page-1');
});
Route::get('/T-Express_MyOrders-Page-2', function () {
    return view('ltr/T-Express_MyOrders-Page-2');
});
Route::get('/T-Express_ResetPassword', function () {
    return view('ltr/T-Express_ResetPassword');
});
Route::get('/T-Express_SignIn', function () {
    return view('ltr/T-Express_SignIn');
});
Route::get('/T-Express_SignUp', function () {
    return view('ltr/T-Express_SignUp');
});
Route::get('/T-Express_SubCategories', function () {
    return view('ltr/T-Express_SubCategories');
});
Route::get('/T-Express_Categories', function () {
    return view('ltr/T-Express_Categories');
});
Route::get('/T-Express_AccountSettings_RTL', function () {
    return view('rtl/T-Express_AccountSettings_RTL');
});
Route::get('/T-Express_Cart_RTL', function () {
    return view('rtl/T-Express_Cart_RTL');
});
Route::get('/T-Express_ContactUs_RTL', function () {
    return view('rtl/T-Express_ContactUs_RTL');
});
Route::get('/T-Express_ForgotPassword_RTL', function () {
    return view('rtl/T-Express_ForgotPassword_RTL');
});
Route::get('/T-Express_Items_RTL', function () {
    return view('rtl/T-Express_Items_RTL');
});
Route::get('/T-Express_MarketPlace_RTL', function () {
    return view('rtl/T-Express_MarketPlace_RTL');
});
Route::get('/T-Express_MyFavorites_RTL', function () {
    return view('rtl/T-Express_MyFavorites_RTL');
});
Route::get('/T-Express_MyOrders-Page-1_RTL', function () {
    return view('rtl/T-Express_MyOrders-Page-1_RTL');
});
Route::get('/T-Express_MyOrders-Page-2_RTL', function () {
    return view('rtl/T-Express_MyOrders-Page-2_RTL');
});
Route::get('/T-Express_ResetPassword_RTL', function () {
    return view('rtl/T-Express_ResetPassword_RTL');
});
Route::get('/T-Express_SignIn_RTL', function () {
    return view('rtl/T-Express_SignIn_RTL');
});
Route::get('/T-Express_SignUp_RTL', function () {
    return view('rtl/T-Express_SignUp_RTL');
});
Route::get('/T-Express_SubCategories_RTL', function () {
    return view('rtl/T-Express_SubCategories_RTL');
});
Route::get('/T-Express_Categories_RTL', function () {
    return view('rtl/T-Express_Categories_RTL');
});
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');

Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');

Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/T-Express_ContactUs', 'ContactController@create');
Route::post('/T-Express_ContactUs', 'ContactController@store');
Route::get('/T-Express_ContactUs_RTL', 'contact_rtlController@create');
Route::post('/T-Express_ContactUs_RTL', 'contact_rtlController@store');
