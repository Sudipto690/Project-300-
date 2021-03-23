@extends('layout')
@section('content')
       <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          
                          <th>T-Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Image</th>
                          <th>Faculty</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	 @foreach($all_teacher_info as $v_teacher)
                      <tr>
                          
                          <td>{{$v_teacher->teacher_name}}</td>
                          <td>{{$v_teacher->teacher_phone}}</td>
                          <td>{{$v_teacher->teacher_email}}</td>
                          <td>{{$v_teacher->teacher_address}}</td>
                          <td><img src="{{URL::to($v_teacher->teacher_image)}}"  style="height:50px; width:60px; border-radius: 50%; "></td>
                          
                          <td>
                          	@if($v_teacher->teacher_faculty ==1)
                          	<span class="label label-success">{{'CSE'}}</span>
                          	@elseif($v_teacher->teacher_faculty ==2)
                          	<span class="label label-success">{{'BBA'}}</span>
                          	@elseif($v_teacher->teacher_faculty ==3)
                          	<span class="label label-success">{{'LLB'}}</span>
                          	@elseif($v_teacher->teacher_faculty ==4)
                          	<span class="label label-success">{{'EEE'}}</span>
                          	@elseif($v_teacher->teacher_faculty ==5)
                          	<span class="label label-success">{{'BA'}}</span>
                          	@elseif($v_teacher->teacher_faculty ==6)
                          	<span class="label label-success">{{'CIVIL'}}</span>
                          	@else
                          	<span class="label label-important">
                          	{{'Not defined'}}
                          	</span>
                          	@endif
                          </td>
               
                          <td>
                           
                            <a href=""><button class="btn btn-outline-danger">Delete</button></a>

                          </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection