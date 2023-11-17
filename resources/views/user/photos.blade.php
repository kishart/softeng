@extends('layouts.navbar')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">




<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Blog Posts</h1>
        <p class="services_text">There are many variations of passages of Lorem Ipssm abaiaoaiuc aiusi suufa suuags fa gfasg asg liuasgc iasgcias gcisagc </p>
        <div class="services_section_2">
            <div class="row">
                
                @foreach($post as $post)
                <h4>{{$post->title}}</h4>
                <div><img src="/postimage1/{{$post->image1}}" alt=""></div>
                <div><img src="/postimage2/{{$post->image2}}" alt=""></div>
                <h4>{{$post->description}}</h4>
              
             
            @endforeach
                
            </div>
        </div>
    </div>
</div>

@endsection