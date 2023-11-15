<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function post_photo(){
        return view('admin.post_photo');
    }
    public function add_photo(Request $request){
        $post=new Post;

        $post->title =  $request->title;
        $post->description =  $request->description;

        $image1=$request->image1;
        $imagename=time().'.'.$image1->getClientOriginalExtension();
        $request->image1->move('postimage1',$imagename);
        $post->image1 = $imagename;

        $image2=$request->image2;
        $imagename=time().'.'.$image2->getClientOriginalExtension();
        $request->image2->move('postimage2',$imagename);
        $post->image2 = $imagename;


       $post->save();

      return redirect()->back()->with('success', 'Your post was added successfully!');
    }
}
