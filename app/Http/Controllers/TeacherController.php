<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TeacherController extends Controller
{
    public function addteacher()
    {
    	return view('admin.addteacher');
    }
    public function allteacher()
    {
    	$allteacher_info=DB::table('teacher_tbl')->get();
    	$manage_teacher=view('admin.allteacher')
    	->with('all_teacher_info',$allteacher_info);
    	return view('layout')->with('allteacher',$manage_teacher);
    }
    public function saveteacher(Request $request)
    {
    	$data = array();
    	$data['teacher_name'] =$request->teacher_name;
    	$data['teacher_phone'] =$request->teacher_phone;
    	$data['teacher_email'] =$request->teacher_email;
    	$data['teacher_address'] =$request->teacher_address;
    	$data['teacher_faculty'] =$request->teacher_faculty;
  
    	$image=$request->file('teacher_image');
    	if($image){
    		$image_name= hexdec(uniqid());
    		$ext = strtolower($image->getClientOriginalExtension());
    		$image_full_name = $image_name.'.'.$ext;
    		$upload_path = 'image/';
    		$image_url=$upload_path.$image_full_name;
    		$success= $image->move($upload_path,$image_full_name);
    		$data['teacher_image'] = $image_url;
    		DB::table('teacher_tbl')->insert($data);
    		$notification=array(
    			'message'=> 'Successfully form Inserted with photo',
    			'alert-type' => 'success'
    			);
    		return Redirect('/allteacher')->with($notification);
    	}else{
    		DB::table('teacher_tbl')->insert($data);
    		$notification=array(
    			'message'=> 'Successfully form Inserted without photo',
    			'alert-type' => 'error'
    			);
    		return Redirect('/allteacher')->with($notification);
    	}

    }
}
