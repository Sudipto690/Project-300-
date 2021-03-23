<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BAController extends Controller
{
    public function ba()
    {
    	$bastudent_info=DB::table('students_tbl')
    	->where(['student_department'=>5])
    	->get();
    	
    	$manage_student=view('admin.ba')
    	->with('ba_student_info',$bastudent_info);
    	return view('layout')->with('ba',$manage_student);
    }
}
