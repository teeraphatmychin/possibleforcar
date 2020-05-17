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

Route::get('/Dashboard', 'HomeController@Dashboard')->name('Dashboard')->middleware(['auth','auth.admin']);
Route::get('/Dashboard3', 'HomeController@Dashboard3')->name('Dashboard3')->middleware(['auth','auth.admin']);
Route::get('/Dashboard2', 'HomeController@Dashboard2')->name('Dashboard2')->middleware(['auth','auth.admin']);
Route::get('/calendar', 'HomeController@calendar')->name('calendar')->middleware(['auth','auth.admin']);
Route::get('/gallery', 'HomeController@gallery')->name('gallery')->middleware(['auth','auth.admin']);
Route::get('/widgets', 'HomeController@widgets')->name('widgets')->middleware(['auth','auth.admin']);
Route::get('/chartjs', 'HomeController@chartjs')->name('chartjs')->middleware(['auth','auth.admin']);
Route::get('/flot', 'HomeController@flot')->name('flot')->middleware(['auth','auth.admin']);
Route::get('/inline', 'HomeController@inline')->name('inline')->middleware(['auth','auth.admin']);
Route::get('/n404', 'HomeController@n404')->name('n404')->middleware(['auth','auth.admin']);
Route::get('/n500', 'HomeController@n500')->name('n500')->middleware(['auth','auth.admin']);
Route::get('/blank', 'HomeController@blank')->name('blank')->middleware(['auth','auth.admin']);
Route::get('/contacts', 'HomeController@contacts')->name('contacts')->middleware(['auth','auth.admin']);
Route::get('/e_commerce','HomeController@e_commerce')->name('e_commerce')->middleware(['auth','auth.admin']);
Route::get('/forgot_password2','HomeController@forgot_password')->name('forgot_password')->middleware(['auth','auth.admin']);
Route::get('/invoice', 'HomeController@invoice')->name('invoice')->middleware(['auth','auth.admin']);
Route::get('/invoice_print', 'HomeController@invoice_print')->name('invoice_print')->middleware(['auth','auth.admin']);
Route::get('/language_menu', 'HomeController@language_menu')->name('language_menu')->middleware(['auth','auth.admin']);
Route::get('/legacy_user_menu', 'HomeController@legacy_user_menu')->name('legacy_user_menu')->middleware(['auth','auth.admin']);
Route::get('/lockscreen', 'HomeController@lockscreen')->name('lockscreen')->middleware(['auth','auth.admin']);
Route::get('/lobin', 'HomeController@lobin')->name('lobin')->middleware(['auth','auth.admin']);
Route::get('/pace', 'HomeController@pace')->name('pace')->middleware(['auth','auth.admin']);
Route::get('/profile', 'HomeController@profile')->name('profile')->middleware(['auth','auth.admin']);
Route::get('/project_add','HomeController@project_add')->name('project_add')->middleware(['auth','auth.admin']);
Route::get('/project_detail', 'HomeController@project_detail')->name('project_detail')->middleware(['auth','auth.admin']);
Route::get('/project_edit', 'HomeController@project_edit')->name('project_edit')->middleware(['auth','auth.admin']);
Route::get('/projects', 'HomeController@projects')->name('projects')->middleware(['auth','auth.admin']);
Route::get('/recover_password','HomeController@recover_password')->name('recover_password')->middleware(['auth','auth.admin']);
Route::get('/register', 'HomeController@register')->name('register')->middleware(['auth','auth.admin']);
Route::get('/advanced', 'HomeController@advanced')->name('advanced')->middleware(['auth','auth.admin']);
Route::get('/editors', 'HomeController@editors')->name('editors')->middleware(['auth','auth.admin']);
Route::get('/general', 'HomeController@general')->name('general')->middleware(['auth','auth.admin']);
Route::get('/validation', 'HomeController@validation')->name('validation')->middleware(['auth','auth.admin']);
Route::get('/boxed', 'HomeController@boxed')->name('boxed')->middleware(['auth','auth.admin']);
Route::get('/collapsed_sidebar', 'HomeController@collapsed_sidebar')->name('collapsed_sidebar')->middleware(['auth','auth.admin']);
Route::get('/fixed_footer', 'HomeController@fixed_footer')->name('fixed_footer')->middleware(['auth','auth.admin']);
Route::get('/fixed_topnav', 'HomeController@fixed_topnav')->name('fixed_topnav')->middleware(['auth','auth.admin']);
Route::get('/fixed_sidebar', 'HomeController@fixed_sidebar')->name('fixed_sidebar')->middleware(['auth','auth.admin']);

Route::get('/top_nav_sidebar', 'HomeController@top_nav_sidebar')->name('top_nav_sidebar')->middleware(['auth','auth.admin']);
Route::get('/top_nav', 'HomeController@top_nav')->name('top_nav')->middleware(['auth','auth.admin']);
Route::get('/compose', 'HomeController@compose')->name('compose')->middleware(['auth','auth.admin']);
Route::get('/mailbox', 'HomeController@mailbox')->name('mailbox')->middleware(['auth','auth.admin']);
Route::get('/read_mail', 'HomeController@read_mail')->name('read_mail')->middleware(['auth','auth.admin']);

Route::get('/data', 'HomeController@data')->name('data')->middleware(['auth','auth.admin']);
Route::get('/jsgrid','HomeController@jsgrid')->name('jsgrid')->middleware(['auth','auth.admin']);
Route::get('/simple', 'HomeController@simple')->name('simple')->middleware(['auth','auth.admin']);

Route::get('/buttons', 'HomeController@buttons')->name('buttons')->middleware(['auth','auth.admin']);
Route::get('/gerneral', 'HomeController@gerneral')->name('gerneral')->middleware(['auth','auth.admin']);

Route::get('/icons', 'HomeController@icons')->name('icons')->middleware(['auth','auth.admin']);
Route::get('/modals', 'HomeController@modals')->name('modals')->middleware(['auth','auth.admin']);
Route::get('/navbar', 'HomeController@navbar')->name('navbar')->middleware(['auth','auth.admin']);
Route::get('/ribbons', 'HomeController@ribbons')->name('ribbons')->middleware(['auth','auth.admin']);
Route::get('/sliders', 'HomeController@sliders')->name('sliders')->middleware(['auth','auth.admin']);
Route::get('/timeline', 'HomeController@timeline')->name('timeline')->middleware(['auth','auth.admin']);
Route::get('/starter', 'HomeController@starter')->name('starter')->middleware(['auth','auth.admin']);





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
Route::group(['middleware' => ['auth','auth.admin']], function () {
    Route::get('blog/{slug}',['as'=> 'blog.single','uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
    Route::get('blog',['uses'=>'BlogController@getIndex', 'as'=> 'blog.index']);
});
Route::resource('categories', 'CetagoryController',['except'=>['create']]);
Route::resource('tags', 'TagController',['except'=>['create']]);
Route::resource('posts', 'PostController');
Route::get('pages', 'PagesController@getIndex');
Route::resource('categories', 'CategoryController',['except'=>['create']]);


Route::post('comments/{post_id}',['uses'=>'CommentsController@store','as' => 'comments.store']);



// google
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//facebook
Route::prefix('login')->group(function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.provider.callback');
});





