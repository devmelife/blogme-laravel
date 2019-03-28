@extends('layouts.appdash') 
@section('content2')

<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <br>    
                      
                    <a href="/mypost" class="btn btn-primary"><i class="fas fa-backward"></i></a>
                    <h1>{{ $postdash->title }}</h1>




<hr>

<img style="width:50%"   src="/storage/cover_images/{{ $postdash->cover_image }}" alt="error">
<br>
<br>
<div>
    {!!$postdash->body!!}

</div>
<hr>
<small>Written on {{ $postdash->created_at }} by {{ $postdash->user->name }}</small>
<hr>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>

 @endsection