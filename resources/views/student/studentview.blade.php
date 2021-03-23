@extends('student.layout')
@php
	function convert_department($value){
		$values=[
			1=>'CSE',
			2=>'BBA',
			3=>'LLB',
			4=>'EEE',
			5=>'BA',
			6=>'CIVIL'
		];
		return $values[$value];
}
@endphp

@section('content')
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 style="color:maroon; font-family:cursive; font-weight: bolder;">METROPOLITAN UNIVERSITY</h2>
                  <img src="{{asset('images/image6.jpg')}}" style="height: 80px;width: 140px;" alt="Logo">
                  <p class="name">Amit</p>
                  <p class="designation">-  089  -</p>
                  <a class="email" href="#">amit@gmail.com</a>
                  <a class="number" href="#">01718096649</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>3.2</p><p>Running Semester</p></li>
                    <li><p>98.5</p><p>Completed Credit</p></li>
                  </ul>
                  <div class="wrapper about-user">
                  	
                    <h2 class="card-title mt-6 mb-6 bg-info">More Information About Student</h2>
                    
                  </div>
                  <div class="info-links">
                      <a class="website" >
                      <i class="icon-globe icon">Father's Name:</i>
                      <span style="font-family: vernada; font-size: 15px;">Songkor</span>
                      </a>
                      <a class="website" >
                      <i class="icon-globe icon">Mother's Name:</i>
                      <span style="font-family: vernada; font-size: 15px;">Beli</span>
                      </a>
                      <a class="website" >
                      <i class="icon-globe icon">Address:</i>
                      <span style="font-family: vernada; font-size: 15px;">Tangail</span>
                      </a>

                      <a class="website" >
                      <i class="icon-globe icon"  >Department:</i>
                      <span style="font-family: vernada; font-size: 15px;">BA</span>
                      </a>
                      <a class="website" >
                      <i class="icon-globe icon"  >Addmission Year:</i>
                      <span style="font-family: vernada; font-size: 15px;">2020-02-12</span>
                      </a>
                     
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        
@endsection