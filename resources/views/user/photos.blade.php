@extends('layouts.navbar')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
    /* Style for carousel images */
    .carousel-item img {
        display: block;
        margin: 0 auto; /* Centers the image */
        max-width: 550px; /* Adjust the width as needed */
        height: auto;
    }
</style>

<div class="services_section layout_padding">
    <div class="container">
      
        @foreach($post as $post)

        <h4>{{$post->title}}</h4>
    
        <div id="carouselExampleControls{{$post->id}}" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/postimage1/{{$post->image1}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/postimage2/{{$post->image2}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls{{$post->id}}" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls{{$post->id}}" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    
        @endforeach
    
                
            </div>
        </div>
    </div>
</div>

@endsection
