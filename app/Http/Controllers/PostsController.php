<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;


class PostsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }







    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , ['title'=> 'required','cover_image'=>'image|nullable|max:1999']);
      
      
      //handle file upload
        if($request->hasFile('cover_image'))
        {
                //get filename with extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                //get justfilename
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                //get just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                //filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                //upload image
                $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $post =new Post;
        $post->title =$request->input('title');
        $post->body=$request->input('type') ?: 'this is my post';
        $post->user_id =auth()->user()->id; 
        $post->cover_image = $fileNameToStore;
    
        $post->save();
        if ($post) {
            alert()->success('Post Created', 'Successfully');
            return redirect('/mypost');
        }
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        //
       $post = Post::find($id);
      
       if ($request->is('showdash/'.$id.'')) {
        return view('posts.showdash')->with('postdash',$post); 
       
        }
        
        return view('posts.show')->with('post',$post); 

    }
  
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       
        $post =Post::find($id);
        if(auth()->user()->id !== $post->user_id)
        {
            Alert::warning('error', 'Unauthorized Page');
            return redirect('/posts')->with('error','Unauthorized Page');
        }
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          
     $this->validate($request , ['title'=> 'required','body' => 'required','cover_image'=>'image|nullable|max:1999']);
         //handle file upload
         if($request->hasFile('cover_image'))
         {
                 //get filename with extension
                 $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                 //get justfilename
                 $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                 //get just ext
                 $extension = $request->file('cover_image')->getClientOriginalExtension();
                 //filename to store
                 $fileNameToStore = $filename.'_'.time().'.'.$extension;
                 //upload image
                 $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
         }
     
     
          $post =Post::find($id);
          $post->title =$request->input('title');
          $post->body=$request->input('body');
          if($request->hasFile('cover_image'))
          {
            $post->cover_image = $fileNameToStore;
          }
          $post->save();
          if ($post) {
            alert()->success('Post Upddated', 'Successfully');
            return redirect('/mypost');
        }
        }
         

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post =Post::find($id);
        if(auth()->user()->id !== $post->user_id)
        {
            Alert::warning('error', 'Unauthorized Page');
            return redirect('/posts')->with('error','Unauthorized Page');
        }
        else
        {
            if($post->cover_image != 'noimage.jpg')
            {
                Storage::delete('public/cover_images/'.$post->cover_image);
            }
          
            $post->delete();
            if ($post) {
                alert()->warning('Post Deleted', 'Successfully');
                return redirect('/mypost');
            }




        }
      
      
    }
}
