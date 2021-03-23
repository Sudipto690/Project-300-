<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
	public function admin_dashboard()
	{
		return view('admin.dashboard');
	}

	//admin login
    public function logindashboard(Request $request)
    {
    	$email = $request->admin_email;
    	$password =md5($request->admin_password);
    	$result =DB::table('admin_tbl')
    	->where('admin_email',$email)
    	->where('admin_password',$password)
    	->first();
    	if($result){
    		return Redirect('/admin_dashboard');
    	}else{
    		
    		return Redirect('/backend');
    	}
    	
    }

    //logout
    public function logout()
    {
    	return Redirect('/backend');
    }
    //viewprofile
    public function viewprofile()
    {
    	return view('admin.view');
    }
    public function setting()
    {
    	return view('admin.setting');
    }
}
