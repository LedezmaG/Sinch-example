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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/nuevavista', 'SmsController@vista');

// Accounts
Route::get('/getaccounts', 'AccountsController@getAccounts');
Route::get('/getaccount/{id}', 'AccountsController@getAccount');
Route::get('/newaccount', 'AccountsController@newAccountView');
Route::post('/newaccount', 'AccountsController@newAccount');
Route::get('/getbalance', 'AccountsController@getBalanceView');
Route::post('/addcredit', 'AccountsController@addCredit');

// Batches
Route::get('/getlist', 'ItemsListController@getBatches');
Route::get('/newlist/{id}', 'ItemsListController@newBatchView');
Route::get('/contactlist/{id}', 'ItemsListController@contactListView');
Route::post('/newlist/{id}', 'ItemsListController@newBatch');
Route::post('/send/{id}', 'ItemsListController@sendBatchSMS');
Route::post('/deletebatch/{id}', 'ItemsListController@deleteBatch');
Route::post('/newcsv/{id}', 'ItemsListController@newCSVBatch');

// Item
Route::get('/getitems/{id}', 'ItemsController@getBatch');
Route::get('/newitem/{id}', 'ItemsController@newItemView');
Route::post('/newitem/{id}', 'ItemsController@newItem');
Route::get('/contactlist/{id}', 'ItemsController@getContact');
Route::post('/deletecontact/{id}', 'ItemsController@deleteContact');

// Template
Route::get('/getTemplate','TemplateController@gettemplate');
Route::get('/gettemplatesms/{id}','TemplateController@gettemplatesms');
Route::get('/gettemplateitem/{id}','TemplateController@gettemplateitem');
Route::post('/deleteTemplate/{id}','TemplateController@deleteTemplate');
Route::post('/editTemplate/{id}','TemplateController@editTemplate');
Route::post('/newTemplate/{id}','TemplateController@newTemplate');

// Single SMS
Route::get('/single','ItemsController@sendSingleSMSView');
Route::post('/single', 'ItemsController@sendSingleSMS');

// Message 
Route::get('/message','messageListController@getMessajeList');
Route::get('/messageItem/{id}','messageListController@getMessajeItem');

//Mercado pago
Route::get('/pagos','MercadoPagoController@getCreatePreference');
Route::get('/pago','MercadoPagoController@getpay');
Route::get('/pagomercado','MercadoPagoController@getpay');


// check views routes
Route::get('/dasch', function () {return view('vistas.dasch');})->name('dasch');
Route::get('/profile', function () {return view('vistas.profile');})->name('profile');
Route::get('/sms', function () {return view('vistas.sms');})->name('sms');
Route::get('/template', function () {return view('vistas.template');})->name('template');
Route::get('/settings', function () {return view('vistas.settings');})->name('settings');
Route::get('/contacts', function () {return view('vistas.contacts');})->name('contacts');
// Route::get('/balance', function () {return view('vistas.balance');})->name('balance');
Route::get('/sin', function () {return view('vistas.singleSms');})->name('sin');