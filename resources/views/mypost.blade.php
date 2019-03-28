@extends('layouts.appdash')

@section('content2')
<div id="page-wrapper">
 
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <br>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
    
                   
                           
                               <a href="/posts/create" class="btn btn-primary">
                              
                                <i class="fas fa-edit"></i> CREATE</a>
    
                           <hr>
                           <h3>My Blog Posts</h3>
                            @if(count($posts) > 0)
                           <table class="table table-striped" id="users-table">
                               <tr>
                                   <th>Title</th>
                                   <th>DATE</th>
                                 
                                   <th>Action</th>
                                   <th></th>
                                   
                               </tr>
                               @foreach($posts as $post)
                                    <tr>
                                        <td><a href="/showdash/{{ $post->id }}"> {{ $post->title }} </a></td>
                                        <td>    <small>Written on {{ $post->created_at }} </small></td>
                                        <td style='white-space: nowrap'>
                                            <a href="/posts/{{ $post->id }}/edit"  >
                                            <button class="btn btn-primary" type="submit"><i class="fas fa-edit"></i>EDIT</button></a>
                                            <a href="/posts/{{ $post->id }}/delete"  >
                                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>DELETE</button></a>
                                         </td>
                                        {{-- <td id="space">
                                                <a href="/posts/{{ $post->id }}/delete"  >
                                                    <button class="btn btn-danger" type="submit"><i class="fas fa-edit"></i>EDIT</button></a> --}}

                                                {{-- {!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'Post' ,'class'=>'float-right']) !!} 
                                                {{ Form::hidden('_method','DELETE')}}
                                                {{ Form::button('
                                                <i class="fa fa-trash"></i>DELETE', ['type' => 'submit', 'class' => 'btn btn-danger'] ) }} 
                                                {!! Form::close() !!}   --}}

                                        {{-- </td> --}}
                                       
                                    </tr>
                                @endforeach
                                <br>
                                    
                           </table>
                           {{ $posts->links() }}
                         
                           @else
                
                                    <p>You have no posts</p>
                                   
                           @endif

                          
                         
                         
                        
                        
                          
                    </div>
                </div>
            </div>
        </div>
   
</div>


@endsection
