
 @extends('layouts.app')

 @section('content')     
      <!-- Modal -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">your Blog Posts</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  
                        <h1>Create Post</h1>
                        {!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
                        <div class="form-group">
                           {{ Form::label('title', 'title')}}
                           {{ Form::text('title','',['class'=>'form-control','placeholder'=>'Title']) }}
                
                        </div>
                        <div class="form-group">
                            {{ Form::label('body', 'Body')}}
                            {{ Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text']) }}
                 
                         </div>
                
            </div>
            <div class="modal-footer">
                  
                {{ Form::submit('Submit',['class'=>'btn btn-success',])}}
                 {!! Form::close() !!}
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
            </div>
          </div>
        </div>
      </div>

@endsection 