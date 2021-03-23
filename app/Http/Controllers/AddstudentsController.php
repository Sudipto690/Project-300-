<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AddstudentsController extends Controller
{
    public function addstudent()
    {
    	return view('admin.addstudent');
    }
    public function savestudent(Request $request)
    {
    	$data = array();
    	$data['student_name'] =$request->student_name;
    	$data['student_roll'] =$request->student_roll;
    	$data['student_fathername'] =$request->student_fathername;
    	$data['student_mothername'] =$request->student_mothername;
    	$data['student_email'] =$request->student_email;
    	$data['student_phone'] =$request->student_phone;
    	$data['student_address'] =$request->student_address;
    	$data['student_password'] =$request->student_password;
    	$data['student_department'] =$request->student_department;
    	$data['student_admissionyear'] =$request->student_admissionyear;
    	$image=$request->file('student_image');
    	if($image){
    		$image_name= hexdec(uniqid());
    		$ext = strtolower($image->getClientOriginalExtension());
    		$image_full_name = $image_name.'.'.$ext;
    		$upload_path = 'image/';
    		$image_url=$upload_path.$image_full_name;
    		$success= $image->move($upload_path,$image_full_name);
    		$data['student_image'] = $image_url;
    		DB::table('students_tbl')->insert($data);
    		$notification=array(
    			'message'=> 'Successfully form Inserted with photo',
    			'alert-type' => 'success'
    			);
    		return Redirect('/addstudent')->with($notification);
    	}else{
    		DB::table('posts')->insert($data);
    		$notification=array(
    			'message'=> 'Successfully form Inserted without photo',
    			'alert-type' => 'error'
    			);
    		return Redirect('/addstudent')->with($notification);
    	}

    }
    public function studentupdate(Request $request,$student_id)
        {
            $data = array();
            $data['student_name'] =$request->student_name;
            $data['student_roll'] =$request->student_roll;
            $data['student_fathername'] =$request->student_fathername;
            $data['student_mothername'] =$request->student_mothername;
            $data['student_phone'] =$request->student_phone;
            $data['student_address'] =$request->student_address;
            $data['student_admissionyear'] =$request->student_admissionyear;
            DB::table('students_tbl')->where('student_id',$student_id)->update($data);
            return Redirect('/allstudent');

        }
}
