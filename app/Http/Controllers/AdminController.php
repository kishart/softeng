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
        $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;

        $post=new Post;

        $post->title =  $request->title;
        $post->description =  $request->description;
        $post->post_status = 'active';

       

        $image1=$request->image1;
        if($image1)
        {
            $imagename=time().'.'.$image1->getClientOriginalExtension();
            $request->image1->move('postimage1',$imagename);
            $post->image1 = $imagename;
        }

        $image2=$request->image2;
        if($image2)
        {
            $imagename=time().'.'.$image2->getClientOriginalExtension();
            $request->image2->move('postimage2',$imagename);
            $post->image2 = $imagename;
        }
        
    

       $post->save();

      return redirect()->back()->with('success', 'Your post was added successfully!');
    }

    public function show_post(){
        $post=Post::all();
        return view('admin.show_post', compact('post'));
    }

    public function delete_post($id){
       $post = Post::find($id);
       $post->delete();
       return redirect()->back()->with('message', 'Post deleted successfully');
    }

    public function edit_post($id){
       $post = Post::find($id);
      
       return view('admin.edit_post', compact('post'));
    }
    public function update_post(Request $request,$id){
       $data = Post::find($id);
      $data->title=$request->title;
      $data->description=$request->description;
      $image1=$request->image1;
      if($image1){
            $imagename=time().'.'.$image1->getClientOriginalExtension();
            $request->image1->move('postimage1',$imagename);
            $data->image1 = $imagename;
    
      }
      $image2=$request->image2;
        if($image2){
            $imagename=time().'.'.$image2->getClientOriginalExtension();
            $request->image2->move('postimage2',$imagename);
            $data->image2 = $imagename;
    
      }
      $data->save();
      return redirect()->back()->with('message', 'Post updated successfully');
      }

 public function photos(){
        $post=Post::all();
        return view('user.photos', compact('post'));
    }

   







}
