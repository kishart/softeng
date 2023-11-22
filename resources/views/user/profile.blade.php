@extends('layouts.navbar')
@section('content')

<style>
	tr{
		background-color: black; 
		color:white;
	}
	th{
		padding: 10px; 
		font-size:20px;
		 color:white;
	}
</style>
<div align="center" style="padding:70px;">
	
	<!-- user.profile.blade.php -->
<table>
    <thead>
        <tr>
            <th>Message</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <!-- Loop through $appointments as $booking -->
        @foreach($appoint as $booking)
            <tr>
                <td>{{ $booking->message }}</td>
                <td>{{ $booking->date }}</td>
                <td>{{ $booking->time }}</td>
                <td>{{ $booking->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>

