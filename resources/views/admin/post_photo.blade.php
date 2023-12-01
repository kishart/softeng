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
    @if(Session::has('success'))
    <div class="alert alert-success d-flex justify-content-center" role="alert">
        {{Session::get('success')}}
    </div>
    @endif



    <h1 class="post_title">Upload Photos</h1>

    <div>
        <form action="{{url('add_photo')}}" method="POST" enctype="multipart/form-data">
           @csrf
            <div class="div_center">
                <label>Post Title</label>
                <input type="text" name="title">
             
            </div>
  
            <div class="div_center">
                <label>Image 1</label>
                <input type="file" name="image1">
               
            </div>
            <div class="div_center">
                <label>Image 2</label>
                <input type="file" name="image2">
              
            </div>
            <div class="div_center">
                <input type="submit" class="btn btn-primary">
            </div>
           
        </form>
    </div>
</div>
