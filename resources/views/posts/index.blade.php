@extends('layouts.app')

@section('content')
   <!-- Page Header -->
   <header class="masthead" style="background-image: url('template2/img/postblog.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>“Blogging is a conversation not a code."</h1>
         
            <span class="meta">Posted by
              <a href="#">RR</a>
              </span>
          </div>
        </div>
      </div>
    </div>
  </header>

    
    @if(count($posts) > 0 )
        @foreach($posts as $post)
              
                <div class="card card-body bg-faded">
                    <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <img style="width:100% "   src="/storage/cover_images/{{ $post->cover_image }}" alt="error">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                    <h3>{{ $post->title }}</h3>
                                    <div>
                                           {!! str_limit($post->body , 500) !!}  
                                        
                                        </div>

                                    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                                    <a href="/posts/{{ $post->id }}"  class="btn btn-primary float-right"><i class="fas fa-eye"></i> VIEW</a>
                                
                            </div>


                    </div>
                   
                </div>
                <hr>
           
        @endforeach
        
    
        <div class="container">
                <div class="row">
                  <div class="col-lg-8 col-md-10 mx-auto">
                    <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                </li>
                                  <li class="list-inline-item">
                                        {{ $posts->links() }}
                                  </li>
                                  <li class="list-inline-item">
                                   
                                  </li>
              
                </ul>
        </div>
        </div>
    </div>
        <br>

    @else
    <div class="container">
    <h2 class="post-title">No Post</h2>
</div>
    @endif

    <hr>
           

      <!-- Footer -->
      <footer>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                  <ul class="list-inline text-center">
                    <li class="list-inline-item">
                      <a href="#">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fab fa-bitbucket fa-stack-1x fa-inverse"></i>
                        
                        </span>
                      </a>
                    </li>
                  </ul>
                  <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
                </div>
              </div>
            </div>
          </footer>
@endsection 