<?php
use Illuminate\Http\Request;
use App\ContactUs;

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

Route::get('/', function () {
    return view('basic');
});
Route::get('/lang/{lang}', function ($lang) {
    App::setLocale($lang);
    return view('basic');;
});

Route::post('/contactus', function(Request $request) {
    // $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required', 'subject' => 'required' ]);
    unset($request['_token']);
    ContactUs::create($request->all());
    // dd($request->all());
    return back()->withSuccess(__('messages.thanks_contact')); 
});