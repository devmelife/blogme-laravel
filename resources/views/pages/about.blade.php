@extends('layouts/app')

@section('content')
 <!-- Page Header -->
 <header class="masthead" style="background-image: url('template2/img/about-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>About Us</h1>
            <span class="subheading">This is what we do.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p>
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
