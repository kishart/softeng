@extends('layouts.navbar')
@section('content')
<link rel="stylesheet" href="{{url('css/add-booking.css')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chewy&family=Inter&display=swap" rel="stylesheet">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Add Booking</h2>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method="post" action="{{url('save-booking')}}">
                    @csrf
                    <div class="md-3">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" 
                        value="{{old('name')}}">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{($message)}}
                        </div>
                        @enderror
                        
                    </div>
                    <div class="md-3">
                        <label class="form-label">Email:</label>
                        <input type="text" class="form-control" name="email" 
                         value="{{old('email')}}">
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{($message)}}
                        </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Phone:</label>
                        <input type="text" class="form-control" name="phone" 
                        value="{{old('phone')}}">
                        @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{($message)}}
                        </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Date:</label>
                        <input type="date" class="form-control" name="date" 
                        value="{{old('date')}}">
                        @error('date')
                        <div class="alert alert-danger" role="alert">
                            {{($message)}}
                        </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Time:</label>
                        <input type="time" class="form-control" name="time" 
                        value="{{old('time')}}">
                        @error('time')
                        <div class="alert alert-danger" role="alert">
                            {{($message)}}
                        </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Message:</label>
                        <textarea class="form-control" name="message" 
                       > {{old('message')}}</textarea>
                            @error('message')
                            <div class="alert alert-danger" role="alert">
                                {{($message)}}
                            </div>
                            @enderror 
                    </div><br>
                    <button type="submit"class="button-28" role="button">Submit</button>
                </form>

            </div>
        </div>
    </div>


</body>

@endsection