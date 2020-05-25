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
      Route::get('/admin/impersonate/destroy','Admin\ImpersonateController@destroy')->name('admin.impersonate.destroy');

 });
Route::get('/Dashboard', 'HomeController@Dashboard')->name('Dashboard');
Route::get('/Dashboard2', 'HomeController@Dashboard2')->name('Dashboard2');
Route::get('/Dashboard3', 'HomeController@Dashboard3')->name('Dashboard3');
Route::get('/calendar', 'HomeController@calendar')->name('calendar');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/widgets', 'HomeController@widgets')->name('widgets');
Route::get('/chartjs', 'HomeController@chartjs')->name('chartjs');
Route::get('/flot', 'HomeController@flot')->name('flot');
Route::get('/inline', 'HomeController@inline')->name('inline');
Route::get('/n404', 'HomeController@n404')->name('n404');
Route::get('/n500', 'HomeController@n500')->name('n500');
Route::get('/blank', 'HomeController@blank')->name('blank');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/e_commerce','HomeController@e_commerce')->name('e_commerce');
Route::get('/forgot_password2','HomeController@forgot_password')->name('forgot_password');
Route::get('/invoice', 'HomeController@invoice')->name('invoice');
Route::get('/invoice_print', 'HomeController@invoice_print')->name('invoice_print');
Route::get('/language_menu', 'HomeController@language_menu')->name('language_menu');
Route::get('/legacy_user_menu', 'HomeController@legacy_user_menu')->name('legacy_user_menu');
Route::get('/lockscreen', 'HomeController@lockscreen')->name('lockscreen');
Route::get('/lobin', 'HomeController@lobin')->name('lobin');
Route::get('/pace', 'HomeController@pace')->name('pace');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/project_add','HomeController@project_add')->name('project_add');
Route::get('/project_detail', 'HomeController@project_detail')->name('project_detail');
Route::get('/project_edit', 'HomeController@project_edit')->name('project_edit');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/recover_password','HomeController@recover_password')->name('recover_password');
Route::get('/register', 'HomeController@register')->name('register');
Route::get('/advanced', 'HomeController@advanced')->name('advanced');
Route::get('/editors', 'HomeController@editors')->name('editors');
Route::get('/general', 'HomeController@general')->name('general');
Route::get('/validation', 'HomeController@validation')->name('validation');
Route::get('/boxed', 'HomeController@boxed')->name('boxed');
Route::get('/collapsed_sidebar', 'HomeController@collapsed_sidebar')->name('collapsed_sidebar');
Route::get('/fixed_footer', 'HomeController@fixed_footer')->name('fixed_footer');
Route::get('/fixed_topnav', 'HomeController@fixed_topnav')->name('fixed_topnav');
Route::get('/fixed_sidebar', 'HomeController@fixed_sidebar')->name('fixed_sidebar');

Route::get('/top_nav_sidebar', 'HomeController@top_nav_sidebar')->name('top_nav_sidebar');
Route::get('/top_nav', 'HomeController@top_nav')->name('top_nav');
Route::get('/compose', 'HomeController@compose')->name('compose');
Route::get('/mailbox', 'HomeController@mailbox')->name('mailbox');
Route::get('/read_mail', 'HomeController@read_mail')->name('read_mail');

Route::get('/data', 'HomeController@data')->name('data');
Route::get('/jsgrid','HomeController@jsgrid')->name('jsgrid');
Route::get('/simple', 'HomeController@simple')->name('simple');

Route::get('/buttons', 'HomeController@buttons')->name('buttons');
Route::get('/gerneral', 'HomeController@gerneral')->name('gerneral');

Route::get('/icons', 'HomeController@icons')->name('icons');
Route::get('/modals', 'HomeController@modals')->name('modals');
Route::get('/navbar', 'HomeController@navbar')->name('navbar');
Route::get('/ribbons', 'HomeController@ribbons')->name('ribbons');
Route::get('/sliders', 'HomeController@sliders')->name('sliders');
Route::get('/timeline', 'HomeController@timeline')->name('timeline');
Route::get('/starter', 'HomeController@starter')->name('starter');


 

 Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth','auth.admin']);




///////////////////////////frontend///////////////////////////////
Route::get('/welcome', function () {
    return view('pages.welcome');
});
Route::get('/calculator', function () {
    return view('calculator');
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
Route::group(['middleware' => ['auth','auth.admin']], function () {
    
});

Route::get('blog/{slug}',['as'=> 'blog.single','uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('blog',['uses'=>'BlogController@getIndex', 'as'=> 'blog.index']);
Route::resource('categories', 'CetagoryController',['except'=>['create']]);
Route::resource('tags', 'TagController',['except'=>['create']]);
Route::resource('posts', 'PostController');
Route::get('pages', 'PagesController@getIndex');
Route::resource('categories', 'CategoryController',['except'=>['create']]);
Route::get('cart/{id}', 'PagesController@getCart')->name('cart');
Route::get('wishlist/{id}', 'PagesController@getWishlist')->name('wishist');
Route::post('comments/{post_id}',['uses'=>'CommentsController@store','as' => 'comments.store']);


//Route::match(['get', 'post'],'/products-filter', 'ProductsController@filter');



//facebook
Route::prefix('login')->group(function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.provider.callback');
});



Route::get('testtemplate', 'ProductsController@gridLoad')->name('testtemplate');

Route::match(['get', 'post'],'/products-filter', 'ProductsController@filter');
Route::get('/products/{url}','ProductsController@products');