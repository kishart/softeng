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
    .table_deg{
        border:1px solid #854836;
        width:80%;
        text-align: center;
        margin-left: 50px;
        
    }
    .th_deg{
        background-color:black;
        color:white; 
    }
    .img_deg{
        height:100px;
        width:150px;
        padding: 10px;
    }
  
</style>


@extends('layouts.admin-n')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


 <div class="content">
     @if(session()->has('message'))
    <div class="alert alert-danger d-flex justify-content-center" role="alert">
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="true"></button>
        {{session()->get('message')}}
    </div>
    
    @endif
    <h1 class="post_title">All Post</h1>

    <table class="table_deg">
        <tr class="th_deg">
            <th>Title</th>
            <th>Description</th>
            <th>Post Status</th>
            <th>Best Shot</th>
            <th>Feedback</th>
            <th>Delete</th>
            
        </tr>

    @foreach($post as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->post_status}}</td>
            <td><img class="img_deg" src="postimage1/{{$post->image1}}"></td>
            
            <td>
                <img class="img_deg" src="postimage2/{{$post->image2}}">
            </td>

            <td><a href="{{url('delete_post',$post->id)}}" class="btn btn-danger" onclick="return confirm('are you sure to delete this post?')">Delete</a></td>
        </tr>
    @endforeach
    </table>
</div>










