<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FlightSearchController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ActivationController;
use App\Http\Controllers\FlightDetailsController;
use App\Http\Controllers\BookingController;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('activate/{token}', [ActivationController::class, 'activate'])->name('activate');
Route::post('resend-activation-link', [ActivationController::class, 'resendActivationLink'])->name('resendActivationLink');


Route::get('/flight/{id}', [FlightSearchController::class, 'show'])->name('flight.show');

Route::get('/hotels', function () {
    return view('hotels');
})->name('hotels');

Route::get('/car', function () {
    return view('car');
})->name('car');

Route::get('/crud', function () {
    return view('admin.crud');
})->name('crud');

Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::post('/save-details-and-redirect/{id}', [FlightDetailsController::class,'saveDetailsAndRedirect'])->name('saveDetailsAndRedirect');
Route::post('/process-payment', [FlightDetailsController::class, 'showPaymentPage'])->name('process-payment');
Route::post('/book-flight', [BookingController::class, 'bookFlight'])->name('book.flight');
Route::get('/thank-you', [BookingController::class, 'thankYou'])->name('thank-you');

// Route::get('/show-flight-details/{id}', [FlightDetailsController::class, 'showFlightDetails'])->name('showFlightDetails');

Route::get('/contact', [AuthController::class, 'contact'])->name('contact');

Route::get('/payment', [AuthController::class, 'payment'])->name('payment');

// Show login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Handle login form submission
Route::post('/login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Handle registration form submission
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::post('/payment', [FlightSearchController::class, 'processPayment'])->name('payment');


// Show registration form
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('auth.register');

Route::post('/profile/updateProfile', [ProfileController::class, 'updateProfile'])->name('profile.updateProfile');

Route::get('/search-result', function () {
    return view('search-result');
})->name('search-result');
Route::post('/profile/changePassword', [ProfileController::class, 'changePassword'])->name('profile.changePassword');

Route::post('/flight/search', [FlightSearchController::class, 'search'])->name('flight.search');

Route::post('/book-flight/{id}', [FlightSearchController::class, 'bookFlight'])->name('book_flight');
Route::post('/confirm-booking/{id}', [FlightSearchController::class, 'confirmBooking'])->name('confirm_booking');
Route::get('/booking', [FlightSearchController::class, 'booking'])->name('booking');
Route::get('/search-result/{destination}', [FlightSearchController::class, 'selectFlight'])->name('search-result');

Route::get('activate/{token}', 'ActivationController@activate')->name('activate');

Route::get('/send-test-email', [TestController::class, 'sendTestEmail']);

Route::post('/confirm-booking', [FlightSearchController::class, 'confirmBooking'])->name('confirmBooking');


Route::get('/booking/confirmation', function () {
    return view('flight-details');
})->name('booking.confirmation');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
