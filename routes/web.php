<?php

use App\Http\Controllers\FormsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;

use App\Mail\AuthtestMail;
use App\Mail\LoanApplicationMail;
use App\Mail\LoanApplicationReportMail;
use App\Mail\LoanApproval;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use PhpParser\Node\Expr\PostDec;

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
Route::get('/',function(){
   return Inertia::render('Landing');
   
})->name('home');

Route::get('/application/87659836',function(){
   return Inertia::render('Forms/Form');
})->name('application');

Route::get('/contact',function(){
   return Inertia::render('Contactpage');
})->name('contacts');

Route::get('/mail',[MailController::class, 'contact']);

Route::post('/mail',[MailController::class, 'contact']);

Route::get('/faq',function(){
   return Inertia::render('FAQ');
})->name('FAQ');

Route::get('/terms',function(){
   return Inertia::render('Terms');
})->name('Terms');

Route::get('/newsletter',[MailController::class, 'newsletter']);

Route::post('/newsletter',[MailController::class, 'newsletter']);

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login',[LoginController::class, 'authenticate']);

Route::get('/test',function(){
   return Inertia::render('Approvalsuganda');
});

Route::get('/testimonials',function(){
   return Inertia::render('Testimonials');
});


Route::resource('/posts', FormsController::class);



Route::middleware('auth')->group(function(){
   
   Route::get('tables', function(){
      if(Auth::user()->role==='admin'){
   
         $users=User::all();
        return Inertia::render('Tables',[
           'users'=>$users
        ]);
      }
      else{return Redirect::route('/approvals');}
   });
   
   
   Route::get('/approvals',function(){
      if(Auth::user()->country==='Kenya'){
         return Inertia::render('Approvals');
      }
      else if(Auth::user()->country==='Tanzania'){
         return Inertia::render('Approvalstanzania');
      }
      else if(Auth::user()->country==='Uganda'){
         return Inertia::render('Approvalsuganda');
      }
      else{return 'Please try again later';}
   })->name('/approvals');   
   
   
   
   
   Route::get('/admin', function(){
if(Auth::user()->role==='admin'){
   $users = User::all();
   return Inertia::render('Admin',[
      'users'=>$users
   ]); 
}
else{return Redirect::route('/approvals');}
});




});



Route::delete('destroy', function($id){
   $post = User::findOrfail($id);
   $post->destroy();
});













