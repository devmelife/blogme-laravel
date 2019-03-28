<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link href="{{ url('template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url('template/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('template/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('template/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">


    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">
    <!-- Styles -->
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
   
</head>

<body>

    
    @include('inc.navdash')
  
    @yield('content2')



  


 <!-- jQuery -->
 
 <div id='app'></div>

 <script src="//code.jquery.com/jquery.js"></script>
 <!-- DataTables -->
 <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
 <!-- Bootstrap JavaScript -->
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <!-- App scripts -->
 @stack('scripts')


  <!-- jQuery -->
  <script src="{{ url('template/vendor/jquery/jquery.min.js') }}"></script>

 
  <!-- Metis Menu Plugin JavaScript -->
  <script src="{{ url('template/vendor/metisMenu/metisMenu.min.js') }}"></script>

  <!-- Custom Theme JavaScript -->
  <script src="{{ url('template/dist/js/sb-admin-2.js') }}"></script>

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

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
  
    CKEDITOR.replace( 'textareas' );
    
</script>






</body>

</html>