<style>
   .content{
        background-color: #F2C1A8;
        height: 100%;
        padding-left: 5%;
    }

    .post_title{
        font-size:30px;
        font-weight: bold;
        text-align: center;
        padding:30px;
        color: #854836;
    }
    .div_center{
        text-align: center;
        padding: 30px;
    }
    label{
        display:inline-block;
        width: 200px;
    }
</style>

@extends('layouts.admin-n')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<div class="content">
    @if(session()->has('message'))
    <div class="alert alert-success d-flex justify-content-center" role="alert">
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="true"></button>
        {{session()->get('message')}}
    </div>
    
    @endif
    <h1 class="post_title">Update Post</h1>

  <form action="{{url('update_post', $post->id)}}" method="POST" enctype="multipart/form-data">

    @csrf
    <div class="div_center">
        <label>Post Title</label>
        <input type="text" name="title" value="{{$post->title}}">
     
    </div>
    <div class="div_center">
        <label>Post Description</label>
        <textarea name="description" >{{$post->description}}</textarea>

    </div>
    <div class="div_center">
        <label for="">Old Best Shot Image</label>
        <img style="margin:auto;" height="100px" width="150px" src="/postimage1/{{$post->image1}}">
    </div>
    <div class="div_center">
        <label>Update Best Shot</label>
        <input type="file" name="image1" value="{{$post->image1}}">
       
    </div>
    <div class="div_center">
        <label for="">Old Feedback Images</label>
        <img style="margin:auto;" height="100px" width="150px" src="/postimage2/{{$post->image2}}">
    </div>
    <div class="div_center">
        <label>Feedback</label>
        <input type="file" name="image2" value="{{$post->image2}}">
      
    </div>
    <div class="div_center">
        <input type="submit" value="Update" class="btn btn-primary">
    </div>
   
  </form>
</div>
