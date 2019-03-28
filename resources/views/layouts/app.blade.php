<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    
        <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('template2/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
  
   
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
   
 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ url('template2/css/clean-blog.min.css') }}" rel="stylesheet">
    <link href="{{ url('particles/style.css') }}" rel="stylesheet">


  </head>


<body>

    @include('inc.navbar')



        {{-- @include('inc.messages') --}} @yield('content')

   

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        particlesJS.load('particles-js', '{{ url('particles/particles.json') }}',
        function(){
            console.log('particles.json loaded...')
        })
    </script>



    
    <script>
            function submitForm(btn) {
                // disable the button
                btn.disabled = true;
                // submit the form    
                btn.form.submit();
            }
        </script>
   
   
     <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
     @include('sweetalert::alert')
   

      <!-- Bootstrap core JavaScript -->
      <script src="{{ url('template2/vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ url('template2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
      <!-- Custom scripts for this template -->
      <script src="{{ url('template2/js/clean-blog.min.js') }}"></script>

       <!-- Contact Form JavaScript -->
    <script src="{{ url('template2/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ url('template2/js/contact_me.js') }}"></script>

  



</body>

</html>

