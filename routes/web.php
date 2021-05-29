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



//admin

Route::get('admin/add_banner','AdminController@add_banner');
Route::get('admin/add_welcome','AdminController@add_welcome');
Route::get('admin/add_menu','AdminController@add_menu');
Route::get('admin/add_image','AdminController@add_menuimage');
Route::get('admin/add_gallery','AdminController@add_gallery');
Route::get('admin/add_galleryimg','AdminController@add_galleryimg');
Route::get('admin/add_reviewtitle','AdminController@add_reviewtitle');
Route::get('admin/add_reviewtext','AdminController@add_reviewtext');
Route::get('admin/add_about','AdminController@add_about');
Route::get('admin/add_blog','AdminController@add_blog');
Route::get('admin/contact_info','AdminController@contact_info');


//Frontend
Route::get('/','FrontendController@index');
Route::get('menu','FrontendController@menu');
Route::get('about','FrontendController@about');
Route::get('contact','FrontendController@contact_info');
Route::get('reservation','FrontendController@reservation');
Route::get('stuff','FrontendController@stuff');
Route::get('gallery','FrontendController@gallery');
Route::get('blog','FrontendController@blog');
Route::get('blogd','FrontendController@blogd');


//banner
Route::get('admin/create','BannerController@create');
Route::post('insert','BannerController@insert');
Route::get('banner/show/{id}','BannerController@show');
Route::get('banner/delete/{id}','BannerController@delete');
Route::get('banner/edit/{id}','BannerController@edit');
Route::post('banner/update','BannerController@update');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/dashboard','AdminController@dashboard');

//welcome
Route::get('admin/create','WelcomeController@create');
Route::post('insert','WelcomeController@insert');
Route::get('welcome/delete/{id}','WelcomeController@delete');
Route::get('welcome/edit/{id}','WelcomeController@edit');
Route::post('welcome/update','WelcomeController@update');

//menu
Route::get('admin/create','MenuController@create');
Route::post('insert','MenuController@insert');
Route::get('menu/edit/{id}','MenuController@edit');
Route::post('menu/update','MenuController@update');
Route::get('menu/delete/{id}','MenuController@delete');


//menuimage
Route::get('admin/create','MenuimageController@create');
Route::post('insert','MenuimageController@insert');
Route::get('menuimg/edit/{id}','MenuimageController@edit');
Route::post('menu/update','MenuimageController@update');
Route::get('menu/delete/{id}','MenuimageController@delete');


//gallery
Route::get('admin/create','GalleryController@create');
Route::post('insert','GalleryController@insert');


//gallery images
Route::get('admin/create','GalleryimgController@create');
Route::post('insert','GalleryimgController@insert');


//review
Route::get('admin/review','ReviewController@create');
Route::post('insert','ReviewController@insert');

//reviewtext
Route::get('admin/reviewtext','ReviewtextController@create');
Route::post('insert','ReviewtextController@insert');


//about
Route::get('admin/reviewtext','AboutController@create');
Route::post('insert','AboutController@insert');


//blog
Route::get('admin/blog','BlogController@create');
Route::post('insert','BlogController@insert');


//contact
Route::get('admin/contact','ContactController@create');
Route::post('insert','ContactController@insert');

