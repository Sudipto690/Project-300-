@extends('student.layout')
@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Student</h2>
                  @php
                  $student=DB::table('students_tbl')
                  ->count('student_id');
                  @endphp
                  <p style="font-family: cursive; font-size:20px; font-weight: bold; color:indigo">{{$student}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Teacher</h2>
                   @php
                  $teacher=DB::table('teacher_tbl')
                  ->count('id');
                  @endphp
                  <p style="font-family: cursive; font-size:20px; font-weight: bold; color:green">{{$teacher}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Tuition Fee</h2>
                  <p style="font-family: cursive; font-size:15px; font-weight: bold; color: orange;" >Monthly Fee:5600 TK</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Notice</h2>
                  <p style="font-family: cursive; font-size:15px; font-weight: bold; color: red;" ><span class="badge badge-danger badge-pill ml-auto">New</span> Notification</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>
          
           
            

@endsection('content')