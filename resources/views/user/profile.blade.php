@extends('layouts.admin-n')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Booking List</h2>
                <div style="margin-right:10%; float:right">
                    <a href="{{url('user/add-booking')}}" class="btn btn-primary">Add Booking</a>
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                  
                </table>
            </div>
        </div>
    </div>
