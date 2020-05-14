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

////

Route::resource('categories', 'CetagoryController',['except'=>['create']]);
Route::resource('tags', 'TagController',['except'=>['create']]);



Route::get('testtemplate', function () {
    return view('testtemplate');
});


// google
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//facebook
Route::prefix('login')->group(function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.provider.callback');
});

Route::get('Dashboard', function () {return view('admin.Dashboard');});
Route::get('Dashboard3', function () {return view('admin.Dashboard3');});
Route::get('Dashboard2', function () {return view('admin.Dashboard2');});
Route::get('calendar', function () {return view('admin.pages.calendar');});
Route::get('gallery', function () {return view('admin.pages.gallery');});
Route::get('widgets', function () {return view('admin.pages.widget');});
Route::get('chartjs', function () {return view('admin.pages.charts.chartjs');});
Route::get('flot', function () {return view('admin.pages.charts.flot');});
Route::get('inline', function () {return view('admin.pages.charts.inline');});
Route::get('404', function () {return view('admin.pages.example.404');});
Route::get('500', function () {return view('admin.pages.example.500');});
Route::get('blank', function () {return view('admin.pages.example.blank');});
Route::get('contacts', function () {return view('admin.pages.example.contacts');});
Route::get('e-commerce', function () {return view('admin.pages.example.e-commerce');});
Route::get('forgot-password', function () {return view('admin.pages.example.forgot-password');});
Route::get('invoice', function () {return view('admin.pages.example.invoice');});
Route::get('invoice-print', function () {return view('admin.pages.example.invoice-print');});
Route::get('language-menu', function () {return view('admin.pages.example.language-menu');});
Route::get('legacy-user-menu', function () {return view('admin.pages.example.legacy-user-menu');});
Route::get('lockscreen', function () {return view('admin.pages.example.lockscreen');});
Route::get('lobin', function () {return view('admin.pages.example.lobin');});
Route::get('pace', function () {return view('admin.pages.example.pace');});
Route::get('profile', function () {return view('admin.pages.example.profile');});
Route::get('project-add', function () {return view('admin.pages.example.project-add');});
Route::get('project-detail', function () {return view('admin.pages.example.project-detail');});
Route::get('project-edit', function () {return view('admin.pages.example.project-edit');});
Route::get('projects', function () {return view('admin.pages.example.projects');});
Route::get('recover-password', function () {return view('admin.pages.example.recover-password');});
Route::get('register', function () {return view('admin.pages.example.register');});
Route::get('advanced', function () {return view('admin.pages.forms.advanced');});
Route::get('editors', function () {return view('admin.pages.forms.editors');});
Route::get('general', function () {return view('admin.pages.forms.general');});
Route::get('validation', function () {return view('admin.pages.forms.validation');});
Route::get('boxed', function () {return view('admin.pages.layout.boxed');});
Route::get('collapsed-sidebar', function () {return view('admin.pages.layout.collapsed-sidebar');});
Route::get('fixed-footer', function () {return view('admin.pages.layout.fixed-footer');});
Route::get('fixed-sidebar', function () {return view('admin.pages.layout.fixed-sidebar');});
Route::get('fixed-topnav', function () {return view('admin.pages.layout.fixed-topnav');});
Route::get('top-nav-sidebar', function () {return view('admin.pages.layout.top-nav-sidebar');});
Route::get('top-nav', function () {return view('admin.pages.layout.top-nav');});
Route::get('compose', function () {return view('admin.pages.mailbox.compose');});
Route::get('mailbox', function () {return view('admin.pages.mailbox.mailbox');});
Route::get('read-mail', function () {return view('admin.pages.mailbox.read-mail');});

Route::get('data', function () {return view('admin.pages.tables.data');});
Route::get('jsgrid', function () {return view('admin.pages.tables.jsgrid');});
Route::get('simple', function () {return view('admin.pages.tables.simple');});

Route::get('buttons', function () {return view('admin.pages.UI.buttons');});
Route::get('gerneral', function () {return view('admin.pages.UI.gerneral');});

Route::get('icons', function () {return view('admin.pages.UI.icons');});
Route::get('modals', function () {return view('admin.pages.UI.modals');});
Route::get('navbar', function () {return view('admin.pages.UI.navbar');});
Route::get('ribbons', function () {return view('admin.pages.UI.ribbons');});
Route::get('sliders', function () {return view('admin.pages.UI.sliders');});
Route::get('timeline', function () {return view('admin.pages.UI.timeline');});

Route::get('admin_index', function () {return view('admin.index');});




