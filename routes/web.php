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

////////////////////////////backend////////////////////////////////
// Route::get('/admin',function(){
//     return 'you are admin';
// })->middleware(['auth','auth.admin']);
Route::resource('customer_crud_','customer_manageController')->middleware(['auth','auth.admin']);
Route::resource('car_crud','car_manageController')->middleware(['auth','auth.admin']);
// Auth::routes(['verify' => true, 'register' => false]);
// Auth::routes(['register' => false]);
 Route::resource('ajax-crud', 'AjaxCrudController')->middleware(['auth','auth.admin']);
 Route::post('ajax-crud/update', 'AjaxCrudController@update')->name('ajax-crud.update')->middleware(['auth','auth.admin']);
 Route::get('ajax-crud/destroy/{id}', 'AjaxCrudController@destroy')->middleware(['auth','auth.admin']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth','auth.admin'])->name('admin.')->group(function(){
     Route::resource('/users','UserController',['except' => ['show','create','store']]);
     Route::get('/impersonate/user/{id}','ImpersonateController@index')->name('impersonate');
 });
Route::get('/admin/impersonate/destroy','Admin\ImpersonateController@destroy')->name('admin.impersonate.destroy');
Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth','auth.admin']);
///////////////////////////frontend///////////////////////////////
Route::get('/welcome', function () {
    return view('welcome');
});
Route::resource('customerOrder', 'AjaxCustomerOrderController');
Route::post('customerOrder/update', 'AjaxCustomerOrderController@update')->name('customerOrder.update');
//Route::get('customerOrder/destroy/{id}', 'AjaxCustomerOrderController@destroy')->middleware(['auth','auth.admin']);
Route::get('/', 'All_indexController@shop')->name('index');

Route::resource('saleManage', 'AjaxSaleManageController')->middleware(['auth','auth.admin']);
Route::post('saleManage/update', 'AjaxSaleManageController@update')->name('saleManage.update');
Route::get('saleManage/destroy/{id}', 'AjaxSaleManageController@destroy')->middleware(['auth','auth.admin']);
//Route::get('about_us', 'All_indexController@about_us')->name('about_us');
//Route::get('contact_us', 'All_indexController@contact_us')->name('contact_us');
Route::get('blog-view-grid', 'LoadMoreController@blogPost')->name('blog-view-grid');
// Route::get('/blog_grid_sidebar', 'LoadMoreController@blogPost')->name('blog_grid_sidebar');
// Route::get('/blog_listing_no_sidebar', 'UserController@blog_listing_no_sidebar')->name('blog_listing_no_sidebar');
// Route::get('/blog_listing_sidebar', 'UserController@blog_listing_sidebar')->name('blog_listing_sidebar');
Route::get('car-view-grid', 'LoadMoreController@gridLoad')->name('car-view-grid');
Route::get('car_grid_sidebar', 'LoadMoreController@myPost')->name('car_grid_sidebar');
Route::get('car-view-list','LoadMoreController@listLoad')->name('car-view-list');
Route::get('car_listing_sidebar', 'LoadMoreController@myPost')->name('car_listing_sidebar');
//Route::get('/indexs', 'Indexcontroller@shop')->name('indexs');
// Route::get('/single_car', 'UserController@single_car')->name('single_car');
Route::get('detail-car/{id}', 'All_indexController@detialpro')->name('detail-car');
//Route::get('/single_post', 'UserController@single_post')->name('single_post');
//Route::get('frontend.article-post/{id}', 'All_indexController@detialpro_blog')->name('article-post');

////////////////////////////backend///////////////////////////////
// Route::get('backend_admin/index',function(){
//     return view ('possiblecar4/backend_admin.index');
// });
// Route::get('backend_admin/login',function(){
//     return view ('possiblecar4/backend_admin.login');
// });
// Route::get('backend_admin/register',function(){
//     return view ('possiblecar4/backend_admin.register');
// });
// Route::get('backend_admin/forgot',function(){
//     return view ('possiblecar4/backend_admin.forgot-password');
// Auth::routes();

// // Authentication Routes...
// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('login', 'Auth\LoginController@login');
// $this->post('logout', 'Auth\LoginController@logout')->name('logout');

// // Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['register' => false]);


// google
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//facebook

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

