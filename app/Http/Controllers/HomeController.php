<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
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
        $userId = Auth::id(); // Assigning the user ID to $userId variable

        if ($userId) {
            return view('user.profile');
        } else {
            return redirect()->back();
        }
    }


}
