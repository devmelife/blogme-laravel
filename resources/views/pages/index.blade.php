@extends('layouts/app')

@section('content')
   
    <!-- Page Header -->
    <header class="masthead" style="background-image:  url('template2/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h2>“Your ultimate consumers are your users, not search engines.”</h2>
              <span class="meta">Posted by
                <a href="#">RR</a>
                </span>
            </div>
          </div>
        </div>
      </div>
    </header>




          
    <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                @if(count($posts) > 0 )
                @foreach($posts as $post)
              <a href="/posts/{{ $post->id }}">
                <h2 class="post-title">
                                {{ $post->title }}</h2>
                                <h3 class="post-subtitle">
                                       {!! str_limit($post->body , 100) !!}  
                                    
                                      </h3>
                                    </a>
                                    <p class="post-meta">Written on {{ $post->created_at }} by {{ $post->user->name }}</p>
                                  

          
            <hr>
        

    @endforeach
  </div>
    <br>
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
 

@else
<h2 class="post-title">No Post</h2>
@endif
</div>
</div>
</div>



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
        

