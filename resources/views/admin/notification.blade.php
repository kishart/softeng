@extends('layouts.admin-n')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
        /* CSS for card form */
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f4f4f4;
    }
    
    .card {
      width: 70%;
      margin-bottom: 20%;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }
    
    form {
      display: flex;
      flex-direction: column;
    }
    
    </style>
    @foreach ($data as $appoint)
    <div class="card">
        <form>
            <p>Name: <span>{{$appoint->name}}</span></p>
            <p>Email: <span>{{$appoint->email}}</span> </p>
            <p>Phone Number: <span>{{$appoint->phone}}</span></p>
            <p>Message: <span>{{$appoint->message}}</span></p>
        </form>

      </div>

      @endforeach
   