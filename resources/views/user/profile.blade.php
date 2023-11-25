@extends('layouts.navbar')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



<style>
tr{
    background-color: #854836;

}
th {
    padding: 10px;
    font-size: 20px;
    color:white;
}
td{
    padding:10px;
    background-color: white;
    color:black;
}
  
    
</style>
<div  align="center" style:"padding:70px;">
   <table>
    <tr align="center">
        <th>Details</th>
        <th>Date</th>
        <th>Time</th>
        <th>Status</th>
    </tr>

    @foreach($book as $booking)
    <tr align="center">
        <td>{{$booking->message}}</td>
        <td>{{$booking->date}}</td>
        <td>{{$booking->time}}</td>
        <td>{{$booking->status}}</td>
    </tr>
@endforeach

   </table>
</div>

@endsection