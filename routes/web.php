<?php

use App\Http\Controllers\Firebase\AdminController;
use App\Http\Controllers\Firebase\MiscController;
use App\Http\Controllers\Firebase\AccountController;
use App\Http\Controllers\Firebase\CustomerController;
use App\Http\Controllers\Firebase\WorkerController;
use App\Http\Controllers\Firebase\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('about', [MiscController::class, 'miscAbout']);
Route::get('faqs', [MiscController::class, 'miscFaqs']);

# Admin End
Route::get('admin-index', [AdminController::class, 'adminIndex']);

Route::get('login', [AccountController::class, 'login']);
Route::get('logout', [AccountController::class, 'logout']);
Route::get('register', [AccountController::class, 'register']);
Route::get('forgot-password', [AccountController::class, 'forgotPassword']);

Route::middleware('web')->group(function () {

    # Customer End
    Route::get('cust-index', [CustomerController::class, 'custIndex']);

    Route::get('cust-create', [CustomerController::class, 'custCreate']);
    Route::post('cust-create', [CustomerController::class, 'custStore']);

    Route::get('cust-edit/{customerId}', [CustomerController::class, 'custEdit']);
    Route::post('cust-update/{customerId}', [CustomerController::class, 'custUpdate']);
    Route::get('cust-show/{customerId}', [CustomerController::class, 'custShow']);

    Route::delete('cust-delete/{customerId}', [CustomerController::class, 'custDelete']);

    # Worker End
    Route::get('work-index', [WorkerController::class, 'workIndex']);

    Route::get('work-create', [WorkerController::class, 'workCreate']);
    Route::post('work-create', [WorkerController::class, 'workStore']);

    Route::get('work-edit/{workerId}', [WorkerController::class, 'workEdit']);
    Route::post('work-update/{workerId}', [WorkerController::class, 'workUpdate']);
    Route::get('work-show/{workerId}', [WorkerController::class, 'workShow']);

    Route::delete('work-delete/{workerId}', [WorkerController::class, 'workDelete']);

    # Booking End
    Route::get('book-index', [BookingController::class, 'bookIndex']);

    Route::get('book-edit/{bookId}', [BookingController::class, 'bookEdit']);
    Route::post('book-update/{bookId}', [BookingController::class, 'bookUpdate']);
    Route::get('book-show/{bookId}', [BookingController::class, 'bookShow']);

    Route::delete('book-delete/{bookId}', [BookingController::class, 'bookDelete']);

});

Route::get('/', function () {
    return view('welcome');
});

#Route::get('/insert', function () {
#    $custRef = app('firebase.firestore')->database()->collection('customers')->newDocument();
#    $custRef->set([
#        'email' => 'juliaadriannehao718@gmail.com',
#        'password' => 'testing123',
#        'first_name' => 'Julia',
#        'middle_name' => 'Adrianne',
#        'last_name' => 'Hao',
#        'birth_date' => '2002-07-18',
#        'phone_number' => '09123456789',
#        'landline_number' => '88238088'
#    ]);
#});
