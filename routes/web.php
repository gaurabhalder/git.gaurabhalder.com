<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\info; 

Route::get('send-mail', function () {

   

    $details = [

        'title' => 'Mail from ItSolutionStuff.com',

        'body' => 'This is for testing email using smtp'

    ];

   

    \Mail::to('gaurab.sadia@gmail.com')->send(new \App\Mail\mailer($details));

   

    dd("Email is Sent.");

});
Route::get('/', 'WebsiteController@index')->name('home');

Route::get('/about', function () {
    return view('website.about');});
    
Route::get('/service', function () {
    return view('website.service');});

//Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
 
    // Portfolio
    Route::delete('portfolios/destroy', 'PortfolioController@massDestroy')->name('portfolios.massDestroy');
    Route::post('portfolios/media', 'PortfolioController@storeMedia')->name('portfolios.storeMedia');
    Route::post('portfolios/ckmedia', 'PortfolioController@storeCKEditorImages')->name('portfolios.storeCKEditorImages');
    Route::resource('portfolios', 'PortfolioController');

    // Testimonial
    Route::delete('testimonials/destroy', 'TestimonialController@massDestroy')->name('testimonials.massDestroy');
    Route::post('testimonials/media', 'TestimonialController@storeMedia')->name('testimonials.storeMedia');
    Route::post('testimonials/ckmedia', 'TestimonialController@storeCKEditorImages')->name('testimonials.storeCKEditorImages');
    Route::resource('testimonials', 'TestimonialController');

    // Logo
    Route::delete('logos/destroy', 'LogoController@massDestroy')->name('logos.massDestroy');
    Route::resource('logos', 'LogoController');

    // Blog
    Route::delete('blogs/destroy', 'BlogController@massDestroy')->name('blogs.massDestroy');
    Route::post('blogs/media', 'BlogController@storeMedia')->name('blogs.storeMedia');
    Route::post('blogs/ckmedia', 'BlogController@storeCKEditorImages')->name('blogs.storeCKEditorImages');
    Route::resource('blogs', 'BlogController');
    
    // Pixel
    Route::delete('pixels/destroy', 'PixelController@massDestroy')->name('pixels.massDestroy');
    Route::resource('pixels', 'PixelController');

    // Info
    Route::delete('infos/destroy', 'InfoController@massDestroy')->name('infos.massDestroy');
    Route::resource('infos', 'InfoController');

    // Menu
    Route::delete('menus/destroy', 'MenuController@massDestroy')->name('menus.massDestroy');
    Route::resource('menus', 'MenuController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
    
});
