@extends('layouts.appdash')

@section('content2')
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <h1>Edit Post</h1>
                        {!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group">
                               {{ Form::label('title', 'title')}}
                               {{ Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title']) }}
                    
                            </div>
                            <div class="form-group">
                                {{ Form::label('body', 'Body')}}
                                {{ Form::textarea('body',$post->body,['id'=>'textareas','class'=>'form-control','placeholder'=>'Body Text']) }}
                     
                             </div>
                             <div class="form-group">
                                    {{ Form::file('cover_image') }}
                                </div>
                            {{ Form::hidden('_method','PUT')}}
                            <a href="/mypost" class="btn btn-primary"><i class="fas fa-backward"></i></a>
                            {{ Form::submit('Submit',['class'=>'btn btn-success float-right'])}}
                           
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