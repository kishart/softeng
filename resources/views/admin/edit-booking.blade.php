<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Booking</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
@extends('layouts.admin-n')
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Booking</h2>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method="post" action="{{url('update-booking')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="md-3">
                        <label class ="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" 
                        placeholder="Enter Name" value="{{$data->name}}">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{($message)}}
                        </div>
                        @enderror
                        
                    </div>
                    <div class="md-3">
                        <label class="form-label">Email:</label>
                        <input type="text" class="form-control" name="email" 
                        placeholder="Enter Email" value="{{$data->email}}">
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{($message)}}
                        </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Phone:</label>
                        <input type="text" class="form-control" name="phone" 
                        placeholder="Enter Phone Number" value="{{$data->phone}}">
                        @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{($message)}}
                        </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Date:</label>
                        <input type="date" class="form-control" name="date" 
                        placeholder="Enter your chosen date" value="{{$data->date}}">
                        @error('date')
                        <div class="alert alert-danger" role="alert">
                            {{($message)}}
                        </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Time:</label>
                        <input type="text" class="form-control" name="time" 
                        placeholder="Enter your chosen time" value="{{$data->time}}">
                        @error('time')
                        <div class="alert alert-danger" role="alert">
                            {{($message)}}
                        </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Message:</label>
                        <textarea class="form-control" name="message" 
                        placeholder="Enter your  message for another detail"> {{$data->message}}</textarea>
                            @error('message')
                            <div class="alert alert-danger" role="alert">
                                {{($message)}}
                            </div>
                            @enderror 
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('booking-list')}}" class="btn btn-danger">Back</a>
                </form>

            </div>
        </div>
    </div>


</body>
</html>