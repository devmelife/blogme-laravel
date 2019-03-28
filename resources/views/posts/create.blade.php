@extends('layouts.appdash')

@section('content2')
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    @include('inc.messages')
                    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
           {{ Form::label('title', 'title')}}
           {{ Form::text('title','',['class'=>'form-control','placeholder'=>'Title']) }}

        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body')}}
            {{ Form::textarea('body','',['id'=>'textareas','class'=>'form-control','placeholder'=>'Body Text']) }}
 
         </div>
       
         <div class="form-group">
            {{ Form::file('cover_image') }}
        </div>
        {{ Form::submit('Submit',['class'=>'btn btn-success','onclick'=>'submitForm(this)'])}}
      
        {!! Form::close() !!}
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