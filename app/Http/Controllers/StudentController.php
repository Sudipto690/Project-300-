<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class StudentController extends Controller
{
    public function student_dashboard()
	{
		return view('student.dashboard');
	}

    
    public function student_login(Request $request)
    {
    	$email = $request->student_email;
    	$password =$request->student_password;
    	$result =DB::table('students_tbl')
    	->where('student_email',$email)
    	->where('student_password',$password)
    	->first();
    	if($result){
    		return Redirect('/student_dashboard');
    	}else{
    		return Redirect('/');
    	}
    	
    }
    public function student_view(Request $request)
    {
    	return view('student.studentview');
   
    }
    public function student_logout()
    {
    	return view('student_login');
    }
}
