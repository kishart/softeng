@extends('layouts.navbar')
@section('content')

<style>
tr{
    background-color: black;

}
th{
    padding: 10px;
    font-size: 20px;
    color:white;
}
</style>
<div align="center" style:"padding:70px;">
   <table>
    <tr>
        <th>Details</th>
        <th>Date</th>
        <th>Time</th>
        <th>Status</th>
    </tr>

    @foreach($book as $booking)
    <tr>
        <td>{{$booking->message}}</td>
        <td>{{$booking->date}}</td>
        <td>{{$booking->time}}</td>
        <td>{{$booking->status}}</td>
    </tr>
@endforeach

   </table>
</div>

@endsection