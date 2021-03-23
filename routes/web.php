<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddstudentsController;
use App\Http\Controllers\AllstudentsController;
use App\Http\Controllers\BAController;
use App\Http\Controllers\BBAController;
use App\Http\Controllers\CSEController;
use App\Http\Controllers\EEEController;
use App\Http\Controllers\LLBController;
use App\Http\Controllers\CIVILController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TuitionController;
use App\Http\Controllers\StudentController;






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
    return view('student_login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});
//admin login.....
Route::post('adminlogin',[AdminController::class,'logindashboard']);
Route::get('/admin_dashboard',[AdminController::class,'admin_dashboard']);
Route::get('/viewprofile',[AdminController::class,'viewprofile']);
Route::get('/setting',[AdminController::class,'setting']);
//logout...
Route::get('/logout',[AdminController::class,'logout']);

//addstudent
Route::get('/addstudent',[AddstudentsController::class,'addstudent']);
Route::post('/save_student',[AddstudentsController::class,'savestudent']);
Route::post('/update_student{student_id}',[AddstudentsController::class,'studentupdate']);
//allstudent
Route::get('/student_delete{student_id}',[AllstudentsController::class,'studentdelete']);
Route::get('/student_view{student_id}',[AllstudentsController::class,'studentview']);
Route::get('/student_edit{student_id}',[AllstudentsController::class,'studentedit']);
Route::get('/allstudent',[AllstudentsController::class,'allstudent']);
//student dashboard
Route::post('studentlogin',[StudentController::class,'student_login']);
Route::get('/student_dashboard',[StudentController::class,'student_dashboard']);
Route::get('/student_profile',[StudentController::class,'student_view']);
Route::get('/student_logout',[StudentController::class,'student_logout']);


Route::get('/tuitionfee',[TuitionController::class,'tuition']);
Route::get('/cse',[CSEController::class,'cse']);
Route::get('/bba',[BBAController::class,'bba']);
Route::get('/ba',[BAController::class,'ba']);
Route::get('/eee',[EEEController::class,'eee']);
Route::get('/llb',[LLBController::class,'llb']);
Route::get('/civil',[CIVILController::class,'civil']);
Route::get('/addteacher',[TeacherController::class,'addteacher']);
Route::get('/allteacher',[TeacherController::class,'allteacher']);
Route::post('/save_teacher',[TeacherController::class,'saveteacher']);