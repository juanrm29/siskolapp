<?php


use App\Http\Controllers\ErrorController;
use App\Http\Controllers\CalendarController;
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

Route::get('/', 'HomeController@index')->name('pages.home');

Route::get('/dashboard',function (){
    return view('dashboard.index'); 
})->middleware('auth');
Route::group(['middleware' => ['auth', 'roles'],'roles' => ['admin','user']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });
    Route::get('account-settings','UsersController@getSettings');
    Route::post('account-settings','UsersController@saveSettings');
    Route::resource('kategori', 'KategoriController');
    Route::resource('barang', 'BarangController');
    Route::get('calendar', 'CalendarController@index')->name('pages.calendar');
});

Route::group(['middleware' => ['auth', 'roles'],'roles' => 'admin'], function () {
    Route::get('project', function () {
        return view('dashboard.index-project');
    });

    Route::get('analytics', function () {
        return view('dashboard.index-analytics');
    });

    Route::get('shop', function () {
        return view('dashboard.index-shop');
    });

    Route::get('calendar', function () {
        return view('pages.calendar');
    });

    Route::get('mail',function (){
        return view('pages.mail');
    });

    Route::get('chat',function (){
        return view('pages.chat');
    });

    Route::get('to-do',function (){
        return view('pages.to-do');
    });

    Route::get('change-log',function (){
        return view('pages.change-log');
    });

    Route::get('404', [ErrorController::class, 'index'])->name('error');
    Route::get('maintenance', [ErrorController::class, 'maintenance'])->name('maintenance');


//===================== E-commerce Routes =====================//
    Route::get('ecommerce-dashboard', function () {
        return view('ecommerce.dashboard');
    });

    Route::get('ecommerce-product-list', function () {
        return view('ecommerce.product-list');
    });

    Route::get('ecommerce-add-new', function () {
        return view('ecommerce.add-new');
    });

    Route::get('ecommerce-customers', function () {
        return view('ecommerce.customers');
    });

    Route::get('ecommerce-order-list', function () {
        return view('ecommerce.order-list');
    });

    Route::get('ecommerce-order-page', function () {
        return view('ecommerce.order-page');
    });

    Route::get('ecommerce-invoice', function () {
        return view('ecommerce.invoice');
    });
//==============================================================//


//=================== UI Elements Routes ======================//

    Route::get('ui-buttons',function (){
        return view('ui-elements.ui-buttons');
    });

    Route::get('ui-cards',function (){
        return view('ui-elements.ui-cards');
    });

    Route::get('ui-charts',function (){
        return view('ui-elements.ui-charts');
    });

    Route::get('ui-components',function (){
        return view('ui-elements.ui-components');
    });

    Route::get('ui-forms',function (){
        return view('ui-elements.ui-forms');
    });

    Route::get('ui-icons',function (){
        return view('ui-elements.ui-icons');
    });

    Route::get('ui-pricing-tables',function (){
        return view('ui-elements.ui-pricing-tables');
    });

    Route::get('ui-profile',function (){
        return view('ui-elements.ui-profile');
    });

    Route::get('ui-tables',function (){
        return view('ui-elements.ui-tables');
    });

    Route::get('ui-timeline',function (){
        return view('ui-elements.ui-timeline');
    });

    Route::get('ui-typography',function (){
        return view('ui-elements.ui-typography');
    });
//=============================================================//



//==================== Error pages Routes ====================//
    Route::get('403',function (){
        return view('pages.403');
    });

    Route::get('404',function (){
        return view('pages.404');
    });

    Route::get('405',function (){
        return view('pages.405');
    });

    Route::get('500',function (){
        return view('pages.500');
    });


    Route::get('login-page',function (){
        return view('pages.login');
    });


    Route::get('register-page',function (){
        return view('pages.registration');
    });
//============================================================//




    #Permission management
    Route::get('permission-management','PermissionController@getIndex');
    Route::get('permission/create','PermissionController@create');
    Route::post('permission/create','PermissionController@save');
    Route::get('permission/delete/{id}','PermissionController@delete');
    Route::get('permission/edit/{id}','PermissionController@edit');
    Route::post('permission/edit/{id}','PermissionController@update');

    #Role management
    Route::get('role-management','RoleController@getIndex');
    Route::get('role/create','RoleController@create');
    Route::post('role/create','RoleController@save');
    Route::get('role/delete/{id}','RoleController@delete');
    Route::get('role/edit/{id}','RoleController@edit');
    Route::post('role/edit/{id}','RoleController@update');


    # Activity log
    Route::get('activity-log','LogViewerController@getActivityLog');
    Route::get('activity-log/data', 'LogViewerController@activityLogData')->name('activity-log.data');

    #User Management routes
    Route::get('users','UsersController@getIndex');
    Route::get('user/create','UsersController@create');
    Route::post('user/create','UsersController@save');
    Route::get('user/edit/{id}','UsersController@edit');
    Route::post('user/edit/{id}','UsersController@update');
    Route::get('user/delete/{id}','UsersController@delete');
    Route::get('user/deleted/','UsersController@getDeletedUsers');
    Route::get('user/restore/{id}','UsersController@restoreUser');
});

//Log Viewer
Route::get('log-viewers', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@index')->name('log-viewers');
Route::get('log-viewers/logs', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@listLogs')->name('log-viewers.logs');
Route::delete('log-viewers/logs/delete', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@delete')->name('log-viewers.logs.delete');
Route::get('log-viewers/logs/{date}', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@show')->name('log-viewers.logs.show');
Route::get('log-viewers/logs/{date}/download', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@download')->name('log-viewers.logs.download');
Route::get('log-viewers/logs/{date}/{level}', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@showByLevel')->name('log-viewers.logs.filter');
Route::get('log-viewers/logs/{date}/{level}/search', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@search')->name('log-viewers.logs.search');
Route::get('log-viewers/logcheck', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@logCheck')->name('log-viewers.logcheck');


Route::get('auth/{provider}/','Auth\SocialLoginController@redirectToProvider');
Route::get('{provider}/callback','Auth\SocialLoginController@handleProviderCallback');
Route::get('logout','Auth\LoginController@logout');
Auth::routes();



Route::resource('kategori', 'KategoriController');
Route::resource('barang', 'BarangController');