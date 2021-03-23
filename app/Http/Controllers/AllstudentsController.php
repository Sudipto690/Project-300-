<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AllstudentsController extends Controller
{
    public function allstudent()
    {
    	$allstudent_info=DB::table('students_tbl')->get();
    	$manage_student=view('admin.allstudent')
    	->with('all_student_info',$allstudent_info);
    	return view('layout')->with('allstudent',$manage_student);
    }
    public function studentdelete($student_id)
    {
    	DB::table('students_tbl')
    	->where('student_id',$student_id)
    	->delete();
    	return Redirect('/allstudent');
    }
    public function studentview($student_id)
    {
    	$student_description_view=DB::table('students_tbl')
    	->select('students_tbl.*')
    	->where('student_id',$student_id)
    	->first();
    	$manage_description_student = view('admin.studentview')
    	->with('student_description_profile',$student_description_view);
    	return view('layout')->with('studentview',$manage_description_student);
    }
    public function studentedit($student_id)
    {
    	$student_edit=DB::table('students_tbl')
    	->select('students_tbl.*')
    	->where('student_id',$student_id)
    	->first();
    	$manage_edit_student = view('admin.student_edit')
    	->with('student_edit',$student_edit);
    	return view('layout')->with('student_edit',$manage_edit_student);
    }

}
