@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Student Form</h2>
                          @if ($errors->any())
					        <div class="alert alert-danger">
					          <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					          </ul>
					        </div>
					      @endif
                          <form class="forms-sample" method="post" action="{{URL::to('/update_student'.$student_edit->student_id)}}" enctype="multipart/form-data">
                          	@csrf
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student's Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value="{{$student_edit->student_name}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student's Roll</label>
                                  <input type="number" class="form-control p-input" name="student_roll" value="{{$student_edit->student_roll}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Father's Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathername" value="{{$student_edit->student_fathername}}">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothername"  value="{{$student_edit->student_mothername}}">
                              </div>
                               
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student's Phone</label>
                                  <input type="number" class="form-control p-input" name="student_phone"  value="{{$student_edit->student_phone}}">
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student's Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" value="{{$student_edit->student_address}}">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student's Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" value="{{$student_edit->student_password}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student's Addmissionyear</label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" value="{{$student_edit->student_admissionyear}}">
                              </div>

                              <button type="submit" class="btn btn-success">Update</button>
                          </form>
                      </div>
                  </div>
              </div>
@endsection