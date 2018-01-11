<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts; /* Namespace "App" and model name "Posts"*/

class PostController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Posts::all();
        $posts = Posts::orderBy('created_at', 'desc')->paginate(2);    
        return view('posts.index')->with('posts', $posts);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'title' => 'required',
                'body' => 'required',
                'cover_image' => 'image|nullable|max:1999'

            ]);

        //Handle file upload

        if($request->hasFile('cover_image')){
            //filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //filename only
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();   
            //filename to store
            $filenametoStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenametoStore);
        }else{
            $filenametoStore = 'noimage.jpg';
        }

        //Create Post
        $post = new Posts;
        $post->title = $request->input('title');    
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
       if ($request->hasFile('cover_image')) {
            if ($post->cover_image != 'noimage.jpg') {
                Storage::delete('public/cover_images/'.$post->cover_image);
            }
            $post->cover_image = $filenameToStore;
        }
        $post->save();  
    


        return redirect('/home')->with('success', 'Post Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::find($id);
        //
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::find($id);

        if(auth()->user()->id !== $post->user_id){
            return redirect('/post')->with('error', 'Unauthorized Page');
        }
        return view('posts.edit')->with('post', $post);
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
         $this->validate($request, [
                'title' => 'required',
                'body' => 'required'


            ]);

         if($request->hasFile('cover_image')){
            //filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //filename only
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();   
            //filename to store
            $filenametoStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenametoStore);
        }

        //Create Post
        $post = Posts::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $filenametoStore;
        }
        $post->save();

       return redirect('/post')->with('success', 'Post Updated!');
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
    }
}