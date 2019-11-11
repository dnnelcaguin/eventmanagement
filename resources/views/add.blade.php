@extends('layouts.master')
@section('title','Admin | Add Record')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Record</h1>
           
          </div>
 <div class="container">

            <form method="POST" action="{{ route('add') }}" enctype="multipart/form-data">
				@csrf
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  	<label>Upload Photo</label>
                    <input type="file" class="form-control form-control-user" id="image" name="image" accept="image/*" required="">
                  </div>
                   <div class="col-sm-4">
                  	<label>Role</label>
                    <input type="text" class="form-control form-control-user" id="role" name="role" placeholder="Role" required="">
                  </div>
                   <div class="col-sm-4">
                  	<label>Event</label>
                  	<select class="form-control form-control-user" id="event" name="event" name="event" required="">
                  		<option value=""  disabled selected>Choose</option>
                  		<option value="BB. Urdaneta">BB. Urdaneta</option>
                  		<option value="Transdyosa">Transdyosa</option>
						<option value="Bikini Open">Bikini Open</option>
						<option value="Sayaw Urdaneta">Sayaw Urdaneta</option>
                  	</select>
                  
                  </div>
                  
                </div>
                <div class="form-group row">
                	<div class="col-sm-6">
                  	<label>Firstname</label>
                    <input type="text" class="form-control form-control-user" id="firstname" placeholder="First Name" name="firstname" required="">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  	<label>Lastname</label>
                    <input type="text" class="form-control form-control-user" id="lastname" placeholder="Last Name" required="" name="lastname">
                  </div>
          
                </div>
                 <hr>
                <button type="submit" class="btn btn-primary btn-user float-right ">
                  Add Record
                </button>
                <a href="{{route('viewrecord')}}" class="btn btn-dark btn-user float-left ">
                  Back to View
                </a>
              
              </form>
       
      </div>
  </div>
@endsection