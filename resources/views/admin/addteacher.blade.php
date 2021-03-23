@extends('layout')
@section('content')

 <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Teacher</h2>
                          @if ($errors->any())
					        <div class="alert alert-danger">
					          <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					          </ul>
					        </div>
					      @endif
                          <form class="forms-sample" method="post" action="{{URL::to('/save_teacher')}}" enctype="multipart/form-data">
                          	@csrf
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                                  <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" placeholder="Name">
                              </div>
                          
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Email</label>
                                  <input type="email" class="form-control p-input" name="teacher_email" placeholder="Email">
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Phone</label>
                                  <input type="number" class="form-control p-input" name="teacher_phone" placeholder="Number">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" name="teacher_address" placeholder="Address">
                              </div>

                              <div class="form-group">
                                  <label>Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Upload file</label>
                                      <input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp"
                                      name="teacher_image">
                                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                  </div>
                              </div>

                              

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Faculty</label>
                                  <select class="form-control p-input" name="teacher_faculty">
                                  	<option value="1">CSE</option>
                                  	<option value="2">BBA</option>
                                  	<option value="3">LLB</option>
                                  	<option value="4">EEE</option>
                                  	<option value="5">BA</option>
                                  	<option value="6">CIVIL</option>
                                  </select>
                              </div>

                              <button type="submit" class="btn btn-success">Add Teacher</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection