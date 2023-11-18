<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(){
        $data = Booking::get();
        return view('admin/booking-list', compact('data'));
    }
        public function addBooking(){
        return view('user/add-booking');
    }

        public function saveBooking(Request $request){
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'date' => 'required',
                'time'=> 'required',
                'message'=> 'required'

                
            ]);

            $name= $request->name;
            $email= $request->email;
            $phone= $request->phone;
            $date= $request->date;
            $time= $request->time;
            $message= $request->message;

            $stu = new Booking();
            $stu->name = $name;
            $stu->email = $email;
            $stu->phone = $phone;
            $stu->date = $date;
            $stu->time = $time;
            $stu->message = $message;
            $stu->save();

            return redirect()->back()->with('success', 'booking added successfully');
    }
    public function editBooking($id){
         $data = Booking::where('id','=',$id)->first();
         return view('admin/edit-booking', compact('data'));
    }
    public function updateBooking(Request $request){
         $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'date' => 'required',
                'time'=> 'required',
                'message'=> 'required'    
            ]);
            $id= $request->id ;
            $name= $request->name;
            $email= $request->email;
            $phone= $request->phone;
            $date= $request->date;
            $time= $request->time;
            $message= $request->message;

            Booking::where('id', '=', $id)->update([
                'name'=>$name,
                'email'=>$email,
                'phone'=>$phone,
                'date'=>$date,
                'time'=>$time,
                'message'=>$message
            ]);
            return redirect()->back()->with('success', 'booking updated successfully');
    }
    public function deleteBooking($id){
         Booking::where('id', '=', $id)->delete();
          return redirect()->back()->with('success', 'booking deleted successfully');
    
    }
}