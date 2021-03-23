<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CIVILController extends Controller
{
    public function civil()
    {
    	$civilstudent_info=DB::table('students_tbl')
    	->where(['student_department'=>6])
    	->get();
    	
    	$manage_student=view('admin.civil')
    	->with('civil_student_info',$civilstudent_info);
    	return view('layout')->with('civil',$manage_student);
    }
}
