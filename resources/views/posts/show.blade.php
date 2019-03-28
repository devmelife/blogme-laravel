@extends('layouts.app') 
@section('content')

   <!-- Page Header -->
   <header class="masthead" style="background-image: url('/storage/cover_images/{{ $post->cover_image }}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $post->title }}</h1>
          
            <span class="meta">Written on {{ $post->created_at }} by {{ $post->user->name }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>
<hr>

<div class="container" style="text-indent:8%;">
    {!!$post->body!!}

  </div>

  <div class="float-right">
    <br>
    <div class="container">
            <a href="/posts" class="btn btn-primary" ><i class="fas fa-backward"></i></a>

            @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
            
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary ">
                <i class="fas fa-edit"></i> EDIT</a>
            
                
               
                @endif
            @endif
          
          </div>
       
          </div>
       <hr>
            <br>
            <br>
            <br>


  

    






@endsection