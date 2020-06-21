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
Route::get('/',  'Frontend\IndexController@index');

Route::get('lang/{locale}', 'Frontend\IndexController@lang');
Route::get('localization/{locale}','LocalizationController@index');
Route::get('/about',  'Frontend\IndexController@about');
Route::get('/rooms',  'Frontend\IndexController@rooms');
Route::get('/reserv',  'Frontend\IndexController@reservation');
Route::get('/gallery',  'Frontend\IndexController@gallery');
Route::get('/contact',  'Frontend\IndexController@contact');

Route::get('/HotelAdmin', 'Backend\DefaultController@index')->middleware('admin');
Route::get('HotelAdmin/dashboard','Backend\DefaultController@index')->name('dashboard')->middleware('admin');
Route::get('HotelAdmin/logout', 'Backend\DefaultController@logout')->name('Logout')->middleware('admin');
Route::get('HotelAdmin/about', 'Backend\AboutController@index')->name('about')->middleware('admin');
Route::post('HotelAdmin/about/update', 'Backend\AboutController@update')->name('about.update')->middleware('admin');
Route::post('HotelAdmin/about/update_images', 'Backend\AboutController@update_images')->name('about.update_images')->middleware('admin');
Route::post('HotelAdmin/about/update_head_image', 'Backend\AboutController@update_head_image')->name('about.update_head_image')->middleware('admin');
Route::post('HotelAdmin/about/update_slider_image', 'Backend\AboutController@update_slider_image')->name('about.update_slider_image')->middleware('admin');
Route::get('HotelAdmin/about/delete/{id}', 'Backend\AboutController@delete_slider_image')->name('about.delete_slider_image')->middleware('admin');

Route::get('HotelAdmin/gallery', 'Backend\GalleryController@index')->name('gallery')->middleware('admin');
Route::post('HotelAdmin/gallery/update', 'Backend\GalleryController@update')->name('gallery.update')->middleware('admin');
Route::post('HotelAdmin/gallery/update_images', 'Backend\GalleryController@update_images')->name('gallery.update_images')->middleware('admin');
Route::post('HotelAdmin/gallery/update_head_image', 'Backend\GalleryController@update_head_image')->name('gallery.update_head_image')->middleware('admin');
Route::post('HotelAdmin/gallery/update_gallery_image', 'Backend\GalleryController@update_gallery_image')->name('gallery.update_gallery_image')->middleware('admin');
Route::get('HotelAdmin/gallery/delete/{id}', 'Backend\GalleryController@delete')->name('gallery.delete_slider_image')->middleware('admin');
Route::post('HotelAdmin/gallery/store', 'Backend\GalleryController@store')->name('gallery.add_gallery_image')->middleware('admin');


Route::get('HotelAdmin/contact', 'Backend\ContactController@index')->name('contact')->middleware('admin');
Route::post('HotelAdmin/contact/update', 'Backend\ContactController@update')->name('contact.update')->middleware('admin');
Route::post('HotelAdmin/contact/update_images', 'Backend\ContactController@update_images')->name('contact.update_images')->middleware('admin');
Route::post('HotelAdmin/contact/update_head_image', 'Backend\ContactController@update_head_image')->name('contact.update_head_image')->middleware('admin');
Route::post('HotelAdmin/contact/update_slider_image', 'Backend\ContactController@update_slider_image')->name('contact.update_slider_image')->middleware('admin');
Route::get('HotelAdmin/contact/delete/{id}', 'Backend\ContactController@delete_slider_image')->name('contact.delete_slider_image')->middleware('admin');

Route::get('HotelAdmin/rooms', 'Backend\RoomsController@index')->name('rooms')->middleware('admin');
Route::post('HotelAdmin/rooms/update', 'Backend\RoomsController@update')->name('rooms.update')->middleware('admin');
Route::post('HotelAdmin/rooms/update_images', 'Backend\RoomsController@update_images')->name('rooms.update_images')->middleware('admin');
Route::post('HotelAdmin/rooms/update_head_image', 'Backend\RoomsController@update_head_image')->name('rooms.update_head_image')->middleware('admin');
Route::post('HotelAdmin/rooms/update_rooms_image', 'Backend\RoomsController@update_rooms_image')->name('rooms.update_rooms_image')->middleware('admin');
Route::get('HotelAdmin/rooms/delete/{id}', 'Backend\Rooms@delete')->name('rooms.delete_slider_image')->middleware('admin');
Route::post('HotelAdmin/rooms/store', 'Backend\Rooms@store')->name('rooms.rooms_image')->middleware('admin');

Route::get('HotelAdmin/settings', 'Backend\SettingsController@index')->name('settings')->middleware('admin');
Route::post('HotelAdmin/settings/update', 'Backend\SettingsController@update')->name('settings.update')->middleware('admin');
Route::post('HotelAdmin/settings/update_images', 'Backend\SettingsController@update_images')->name('settings.update_images')->middleware('admin');
Route::post('HotelAdmin/settings/update_head_image', 'Backend\SettingsController@update_head_image')->name('settings.update_head_image')->middleware('admin');
Route::post('HotelAdmin/settings/update_slider_image', 'Backend\SettingsController@update_slider_image')->name('settings.update_slider_image')->middleware('admin');
Route::get('HotelAdmin/settings/delete/{id}', 'Backend\SettingsController@delete_slider_image')->name('settings.delete_slider_image')->middleware('admin');


Route::get('/login','Backend\DefaultController@login')->name('login');
Route::post('/login', 'Backend\DefaultController@authenticate')->name('authenticate');
Route::post('HotelAdmin/about/sortable', 'Backend\AboutController@sortable')->name('about.Sortable');

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index')->name('home');
App::setLocale('en');