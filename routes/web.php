<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SetupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect() ->route('login');
});

Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// customer route
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.page');
Route::get('/cust_form', [CustomerController::class, 'create'])->name('customer.form');
Route::post('/custstor', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/custinv', [CustomerController::class, 'custinv'])->name('custinv');
Route::get('/get-customer/27', [CustomerController::class, 'getCustomer']);








// invoice page
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.page');
// Store Form Data Route (POST)
Route::post('/inv_form/store/{customer_id?}', [InvoiceController::class, 'showForm'])->name('invstore');
Route::post('/invstor', [InvoiceController::class, 'storeInvoice'])->name('customer.invoices');
// Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.page');
Route::get('/create-invoice', [InvoiceController::class, 'createform'])->name('create-invoice');
// Route::post('/invstor', [InvoiceController::class, 'invstore'])->name('invstore');
Route::get('/invoices', [InvoiceController::class, 'showForm'])->name('invoices.index');




// compnise routes
Route::get('/set-up', [SetupController::class, 'index']);
Route::post('/setupstore', [SetupController::class, 'store'])->name('setupstore');

// profile route
Route::get('/profile-view', [ProfileController::class, 'profileView'])->name('profile-view');
Route::get('/get-customer-details/{id}', [CustomerController::class, 'getCustomerDetails'])->name('get-data');

// lead manager route 
Route::get('/lead-dashboard', [LeadController::class, 'index'])->name('lead-dashboard');





// contact manager route
Route::get('/contact-dashboard', [ContactController::class, 'index'])->name('contact-dashboard');









// mail manager route
Route::get('/mail-manager', [MailController::class, 'index'])->name('mail-manager');



// file manager route
Route::get('/file-manager', [FileController::class, 'index'])->name('file-manager');

require __DIR__.'/auth.php';
