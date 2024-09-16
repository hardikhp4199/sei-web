<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubServiceController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\VenderController;
use App\Http\Controllers\QuotationController;

use App\Http\Controllers\Auth\ExpertAuthController;
use App\Http\Controllers\ExpertServiceController;
use App\Http\Controllers\ExpertSubServiceController;
use App\Http\Controllers\ExpertActivityController;

use App\Http\Controllers\ClinetListController;
use App\Http\Controllers\ClientServiceController;
use App\Http\Controllers\ClientMasterController;
use App\Http\Controllers\AdminClientController;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Admin panel route
Route::get('/Adminpanel', function () {
    return view('Adminpanel.index');
})->name('Adminpanel');

// Login and Logout routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout.custom');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard route
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

// Service routes
Route::get('/service', function () {
    return view('Adminpanel.service');
})->name('service.form');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::post('/add-service', [ServiceController::class, 'addService'])->name('add.service');
Route::get('edit-service/{id}', [ServiceController::class, 'editService'])->name('edit.service');
Route::post('/update-service/{id}', [ServiceController::class, 'updateService'])->name('update.service');
Route::get('/delete-service/{id}', [ServiceController::class, 'deleteService'])->name('delete.service');

// Display all subservices
Route::get('/subservice', [SubserviceController::class, 'index'])->name('subservice.index');

// Store a new subservice
Route::post('/subservice/store', [SubserviceController::class, 'store'])->name('subservice.store');

// Edit a subservice
Route::get('/subservice/edit/{id}', [SubserviceController::class, 'edit'])->name('subservice.edit');

// Update a subservice (use PUT method)
Route::put('/subservice/update/{id}', [SubserviceController::class, 'update'])->name('subservice.update');

// Delete a subservice
Route::get('/subservice/delete/{id}', [SubserviceController::class, 'delete'])->name('subservice.delete');

Route::get('/activities', [ActivityController::class, 'index'])->name('activity.index');
Route::post('/activities', [ActivityController::class, 'store'])->name('activity.store');
Route::get('/activities/{id}/edit', [ActivityController::class, 'edit'])->name('activity.edit');
Route::put('/activities/{id}', [ActivityController::class, 'update'])->name('activity.update');
Route::get('/activities/{id}', [ActivityController::class, 'delete'])->name('activity.delete');

Route::get('/venderlist',[VenderController::class,'venderList']);

// Expert authentication routes
Route::get('expert/signup', [ExpertAuthController::class, 'showRegisterForm'])->name('expert.signup');
Route::post('expert/signup', [ExpertAuthController::class, 'signup']);
Route::get('expert/login', [ExpertAuthController::class, 'showLogin'])->name('expert.login');
Route::post('expert/login', [ExpertAuthController::class, 'loginForm']);
Route::post('expert/logout', [ExpertAuthController::class, 'logout'])->name('expert.logout');

Route::get('expert/index', [ExpertAuthController::class, 'index'])->name('expert.index');

Route::get('expert/profile',[ExpertAuthController::class,'expert_profile'])->name('expert.profile');

Route::middleware('auth:expert')->group(function () {


Route::get('/bankdetails', [ExpertAuthController::class, 'showBankDetails'])->name('bankdetails.show');
Route::get('/bankdetails/edit', [ExpertAuthController::class, 'editBankDetails'])->name('bankdetails.edit');
Route::put('/bankdetails', [ExpertAuthController::class, 'updateBankDetails'])->name('bankdetails.update');
Route::post('/bankdetails', [ExpertAuthController::class, 'storeBankDetails'])->name('bankdetails.store');

// Show personal details
Route::get('/expertpersonaldetails', [ExpertAuthController::class, 'showPersonalDetails'])->name('expertpersonaldetails.show');
Route::post('/expertpersonaldetails/store', [ExpertAuthController::class, 'storePersonalDetails'])->name('expertpersonaldetails.store');
Route::get('/expertpersonaldetails/edit', [ExpertAuthController::class, 'editPersonalDetails'])->name('expertpersonaldetails.edit');
Route::put('/expertpersonaldetails/update', [ExpertAuthController::class, 'updatePersonalDetails'])->name('expertpersonaldetails.update');

// Show company details
Route::get('/companydetails', [ExpertAuthController::class, 'showCompanyDetails'])->name('companydetails.show');
Route::post('/companydetails', [ExpertAuthController::class, 'storeCompanyDetails'])->name('companydetails.store');
Route::get('/companydetails/edit', [ExpertAuthController::class, 'editCompanyDetails'])->name('companydetails.edit');
Route::put('/companydetails/update', [ExpertAuthController::class, 'updateCompanyDetails'])->name('companydetails.update');

// Route::get('expertservice', [ExpertAuthController::class, 'showServiceDetails'])->name('expertservice.show');
// Route::post('expertservice', [ExpertAuthController::class, 'storeServiceDetails'])->name('expertservice.store');
// Route::put('expertservice', [ExpertAuthController::class, 'updateServiceDetails'])->name('expertservice.update');
// Route::get('/get-subservices/{serviceId}', [ExpertAuthController::class, 'fetchSubservices']);

Route::get('/expert/service', [ExpertServiceController::class, 'index'])->name('expert.service.index');
Route::post('/expert/service', [ExpertServiceController::class, 'store'])->name('expert.service.store');
Route::get('/expert/service/edit/{id}', [ExpertServiceController::class, 'edit'])->name('expert.service.edit');
Route::post('/expert/service/update/{id}', [ExpertServiceController::class, 'update'])->name('expert.service.update');
Route::delete('/expert/service/{id}', [ExpertServiceController::class, 'destroy'])->name('expert.service.delete');

// Expert SubService Routes
Route::get('/expert/subservice', [ExpertSubServiceController::class, 'index'])->name('expert.subservice.index');
Route::post('/expert/subservice', [ExpertSubServiceController::class, 'store'])->name('expert.subservice.store');
Route::get('/expert/subservice/edit/{id}', [ExpertSubServiceController::class, 'edit'])->name('expert.subservice.edit');
Route::post('/expert/subservice/update/{id}', [ExpertSubServiceController::class, 'update'])->name('expert.subservice.update');
Route::delete('/expert/subservice/{id}', [ExpertSubServiceController::class, 'destroy'])->name('expert.subservice.delete');

// Expert Activity Routes
Route::get('/expert/activities', [ExpertActivityController::class, 'index'])->name('expert.activities.index');
Route::post('/expert/activities', [ExpertActivityController::class, 'store'])->name('expert.activities.store');
Route::get('/expert/activities/edit/{id}', [ExpertActivityController::class, 'edit'])->name('expert.activities.edit');
Route::post('/expert/activities/update/{id}', [ExpertActivityController::class, 'update'])->name('expert.activities.update');
Route::delete('/expert/activities/{id}', [ExpertActivityController::class, 'destroy'])->name('expert.activities.delete');

 });

Route::get('/quotation', [QuotationController::class, 'showQuotation'])->name('quotation');
// Route::get('/quotationcreate', [QuotationController::class, 'createQuotation'])->name('quotationcreate');
Route::get('/quotationview', [QuotationController::class, 'viewQuotation'])->name('quotationview');
Route::get('/quotationedit', [QuotationController::class, 'editQuotation'])->name('quotationedit');

//Route::post('/get-expert-details', [ExpertController::class, 'getExpertDetails']); 

Route::get('/quotations/create', [QuotationController::class, 'create'])->name('quotations.create');
Route::post('/quotations/create', [QuotationController::class, 'create'])->name('quotations.create');
Route::post('/quotations/store', [QuotationController::class, 'store'])->name('quotations.store');
Route::get('/experts/{id}', [QuotationController::class, 'fetchExpertDetails']);



Route::get('/get-sub-services/{expertId}/{expertServiceId}', [QuotationController::class, 'getSubServices']);
Route::get('/get-activities', [QuotationController::class, 'getActivities']);


Route::get('/expert-details/{id}', function ($id) {
    $expert = Expert::find($id);
    if ($expert) {
        return response()->json(['success' => true, 'expert' => $expert]);
    } else {
        return response()->json(['success' => false, 'errors' => 'Expert not found'], 404);
    }
});

//Route::post('/getExpertDetails', [YourController::class, 'getExpertDetails'])->name('getExpertDetails');
Route::get('/get-expert-details/{id}', [QuotationController::class, 'getExpertDetails']);
//Route::get('/get-expert-details/{id}', [ExpertController::class, 'getExpertDetails']);


//Route::post('/quotations/create', [QuotationController::class, 'storeQuotation'])->name('quotations.store');

//Route::get('/quotations/create', [QuotationController::class, 'storeQuotation'])->name('quotations.store');

// Route::get('client/login', [ClientController::class, 'ClientLogin'])->name('client.login');
// Route::get('client/register', [ClientController::class, 'ClientRegister'])->name('client.register');
// Route::post('client/signup', [ClientController::class, 'signup'])->name('client.signup');
// Route::post('client/loginForm', [ClientController::class, 'loginForm'])->name('client.loginForm');
// Route::post('client/logout', [ClientController::class, 'logout'])->name('client.logout');

// Route::get('/client-list', [ClinetListController::class, 'clientList'])->name('client.list');

Route::get('/client/services', [ClientServiceController::class, 'index'])->name('client.services');
Route::get('/client/subservices/{service_id}', [ClientServiceController::class, 'getSubservices']);
Route::get('/client/activities/{subservice_id}', [ClientServiceController::class, 'getActivities']);


// Route::get('client/login', [ClientController::class, 'ClientLogin'])->name('client.login');
// Route::get('client/register', [ClientController::class, 'ClientRegister'])->name('client.register');
// Route::post('client/signup', [ClientController::class, 'signup'])->name('client.signup');
// Route::post('client/loginForm', [ClientController::class, 'loginForm'])->name('client.loginForm');
// Route::post('client/logout', [ClientController::class, 'logout'])->name('client.logout');
// Route::post('/signup', [ClientController::class, 'signup'])->name('client.signup');
// Route::post('/create-account', [ClientController::class, 'store'])->name('client.store');

// Route::post('/clientlogindata', [ClientLoginDataController::class, 'store'])->name('clientlogindata.store');
// Route::get('client/get_client',[ClientController::class,'GetClient'])->name('client.get_client');
// Route::get('client/client_getclient',[ClientController::class,'demo'])->name('client.client_getclient');


// Route::get('/client/get', [ClientMasterController::class, 'showForm'])->name('client.get_client');
Route::post('/client/store', [ClientMasterController::class, 'store'])->name('client.store');
Route::get('client/login', [ClientMasterController::class, 'ClientLogin'])->name('client.login');
Route::post('client/login', [ClientMasterController::class, 'cli_login'])->name('client.cli_login');

Route::get('client/register', [ClientMasterController::class, 'ClientRegister'])->name('client.register');
Route::post('client/register', [ClientMasterController::class, 'cli_register'])->name('client.cli_register');

// Route::get('client/services', [ClientMasterController::class, 'GetClient'])->name('client.services');
Route::post('client/services', [ClientMasterController::class, 'updateClientData'])->name('client.update');

Route::post('client/logout', [ClientMasterController::class, 'logout'])->name('client.logout');

// Route::get('client/home',[ClientMasterController::class,'client_home']);
Route::get('/client/home', [ClientMasterController::class, 'showClientHome'])->name('client.home');
Route::get('/get-subservices/{service_id}', [ClientMasterController::class, 'getSubservices'])->name('get.subservices');
Route::get('/get-activities/{subservice_id}', [ClientMasterController::class, 'getActivities'])->name('get.activities');    



// Route::get('/add_client',[AddClientController::class,'add_client'])->name('add.client');

// Route::get('/add_expert',[AddClientController::class,'add_expert'])->name('add.expert');


//Admin Client Routes
Route::get('/admin/client', [AdminClientController::class, 'index'])->name('admin.client');
Route::get('/admin/client/create', [AdminClientController::class, 'create']);
Route::post('/admin/client', [AdminClientController::class, 'store'])->name('admin.client.store');
Route::get('/admin/client/{id}/edit', [AdminClientController::class, 'edit'])->name('admin.client.edit');
Route::post('/admin/client/{id}/update', [AdminClientController::class, 'update'])->name('admin.client.update');
Route::delete('/admin/client/{id}', [AdminClientController::class, 'destory'])->name('admin.client.destory');

// Route::get('/admin/add-client', [AddClientController::class, 'add_client'])->name('admin.client.store');
// Route::post('/admin/add-client', [AddClientController::class, 'store_client'])->name('client.store');
// Route::get('/admin/client-list', [AddClientController::class, 'list_client'])->name('client.list');
// Route::get('/admin/edit-client/{id}', [AddClientController::class, 'edit_client'])->name('client.edit');
// Route::post('/admin/update-client/{id}', [AddClientController::class, 'update_client'])->name('client.update');
// Route::get('/admin/delete-client/{id}', [AddClientController::class, 'delete_client'])->name('client.delete');


Route::get('/client/dashboard',[ClientMasterController::class,'index'])->name('client.dashboard');