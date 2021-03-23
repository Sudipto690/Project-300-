@extends('layout')
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
          <div class="row">
         <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class="social-panel bg-success "><p class="mb-0">CSE</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class="social-panel bg-danger "><p class="mb-0">EEE</p></div>
                    </div>
                   <div class="col-12 col-sm-6 col-md-12">
                      <div class="social-panel bg-primary "><p class="mb-0">BBA</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class="social-panel bg-warning "><p class="mb-0">LLB</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class="social-panel bg-info "><p class="mb-0">BA</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class=" social-panel bg-dark "><p class="mb-0">CIVIL</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class=" social-panel bg-info "><p class="mb-0">MA</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class=" social-panel bg-primary "><p class="mb-0">MBA</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class=" social-panel bg-success "><p class="mb-0">MSC</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class=" social-panel bg-dark "><p class="mb-0">ECE</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class=" social-panel bg-danger "><p class="mb-0">SE</p></div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="card task-list w-100">

                <div class="card-body">
                  <h2 class="card-title">Sit Remaining</h2>
                  <div class="task-cards selected">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">CSE</p>
                        
                      </div>
                      <p class="ticket-number ml-auto">160</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>BBA</small>
                        <small class="value">80</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>EEE</small>
                        <small class="value">90</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>BA</small>
                        <small class="value">90</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>CIVIL</small>
                        <small class="value">90</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>LLB</small>
                        <small class="value">40</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                   <div class="col-12 global-card">
                  <div class="card bg-warning w-100">
                    <div class="card-body text-white d-flex flex-column align-items-center justify-content-center">
                      <h2>Addmission Going On</h2>
                      <p>In this pandemic situation we taken online class regular.</p>
                      <a href="#" class="btn btn-outline-secondary">View Details</a>
                    </div>
                  </div>
                </div>
                  
              
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card user-visits w-100">
                    <div class="card-body">
                      <h2 class="card-title">User Visits</h2>
                      <div class="row mt-5">
                        <div class="col-6">
                          <p class="views text-muted">Views</p>
                          <p class="section">6080 sessions</p>
                          <a href="#" class="btn btn-secondary btn-sm">More Details</a>
                        </div>
                        <div class="col-6">
                          <div id="sparkline-line-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
           
            

@endsection('content')