<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         if(Auth::id()){
            return view('user.home');
        }
        else{
            return redirect()->back();
        }
        
    }
    public function addBooking()
    {
         if(Auth::id()){
            return view('user.add-booking');
        }
        else{
            return redirect()->back();
        }
        
    }

public function adminHome()
    {
        return view('admin.admin');
    }
public function photos(){
        $post=Post::all();
        return view('user.photos', compact('post'));
    }
public function profile()
{
    if(Auth::id()){
         $userId = Auth::user()->id;
        $appoint = booking::where('user_id', $userid)->get();
        return view('user.profile', compact('appoint'));
    }
    else{
        return redirect()->back();
    }
}
    
public function notification(){
        $data = Contact::all();
        return view('admin/notification', compact('data'));
    }
    

public function contact()
    {
        return view('user.contact');
    }
 public function saveContact(Request $request){
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'message'=> 'required'  
            ]);

            $name= $request->name;
            $email= $request->email;
            $phone= $request->phone;
            $message= $request->message;

            $appoint = new Contact();
            $appoint->name = $name;
            $appoint->email = $email;
            $appoint->phone = $phone;
            $appoint->message = $message;
            if(Auth::id()){
            $appoint->user_id = Auth::user()->id;
           
            }
            $appoint->save();

            return redirect()->back()->with('success', 'contact added successfully');
    }


}
  


