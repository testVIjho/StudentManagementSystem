<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Pdo\Firebird;
use App\http\Controllers\StudentController;



Route::get('/',function(){
return view('home');
});
Route::post('/formsubmitted',function(Request $request){
// $data = $request->only(['UserName']);
// $data = $request->except(['UserName']);
// $data = $request->has('UserName');
// $data = $request->filled('UserName');
// $data = $request->missing('UserName');
$request->validate([
    'UserName'=>'required|min:4|max:10',
    'email'=>'required|min:15|min:30'
]);
return redirect()->back();

})->name('formsubmitted');


Route::resource('/student',StudentController::class);
