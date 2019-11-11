@extends('layouts.master')
@section('title','Admin | View Record')
@section('content')
<div class="col-lg-12 mb-4">
    <!-- Illustrations -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                View Record
            </h6>
        </div>
        <div class="card-body text-center">
        	


        	
            {!! QrCode::size(300)->generate($getRecord2->event_id); !!}

            <p>Name: {{ $getRecord2->firstname }} {{ $getRecord2->lastname }}</p>
            <p>Event: {{ $getRecord2->event }}</p>
            <p>Role: {{ $getRecord2->role }}</p>
        </div>
    </div>
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>
                    Copyright © College of Information and Technology Education
                </span>
            </div>
        </div>
    </footer>
    @endsection
</div>