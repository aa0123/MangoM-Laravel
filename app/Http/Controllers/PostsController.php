<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        //$posts = Post::all(); 
        //return Post::where('title', 'POST TWO')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title', 'asc')->take(1)->get();
        //$posts = Post::orderBy('title', 'asc')->get();

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'post_img' => 'image|nullable|max:1999'
        ]);
        //Create post
        // Handle file upload
        if($request->hasFile('post_img')){
            // Get filename with extension
            $filenameWithExt = $request->file('post_img')->getClientOriginalName();
            // get only the file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // get the extension
            $extension = $request->file('post_img')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // upload the image
            $path = $request->file('post_img')->storeAs('public/post_img', $fileNameToStore);
        }

        else {

            $fileNameToStore ='noimage.jpg';
        }
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->post_img = $fileNameToStore;
        $post->save();
        
        return redirect('/post')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
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
        $post = Post::find($id);

        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/post')->with('error', 'Unauthorised Page');

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
        if($request->hasFile('post_img')){
            // Get filename with extension
            $filenameWithExt = $request->file('post_img')->getClientOriginalName();
            // get only the file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // get the extension
            $extension = $request->file('post_img')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // upload the image
            $path = $request->file('post_img')->storeAs('public/post_img', $fileNameToStore);
        }
        //Create post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('post_img')){
            $post->post_img = $fileNameToStore;
        }
        $post->save();
        
        return redirect('/post')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

                // Check for correct user
                if(auth()->user()->id !==$post->user_id){
                    return redirect('/post')->with('error', 'Unauthorised Page');
        
                }

                if($post->post_img != "noimage.jpg"){
                    // delete the image
                    Storage::delete('public/post_img/'.$post->post_img);
                }

        $post->delete();
        return redirect('/post')->with('success', 'Post Removed');

    }
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
}
