<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPUnit\Framework\Constraint\FileExists;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        view()->share('categories', Category::get());

    }




    public function index()
    {
        $posts = Post::orderBy('id','DESC')->get();

        return view('back.posts.posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('back.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $request->validate([
           'title' => 'required | min:3',
            'img' => 'required | image | max:2048'
        ]);
        $post = new Post();
        $post->category_id = $request->category;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;
        $post->slide = $request->slide;

        if ($request->hasFile('img')){
            $imgName = Str::slug($request->title) . '.' . $request->img->getClientOriginalExtension();
            $request->img->move(public_path('images/'),$imgName);
            $post->img = 'images/' . $imgName;

        }

        $post->save();
        return redirect()->route('posts.index')->with('post','Post Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::findOrFail($id);
        return view('back.posts.edit',compact('post'));
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

        $request->validate([
            'title' => 'required | min:3',
            'img' => ' image | max:2048'
        ]);
        $post = Post::find($id);
        $post->category_id = $request->category;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->content;
        $post->slide = $request->slide;

        if ($request->hasFile('img')){
            $imgName = Str::slug($request->title) . '.' . $request->img->getClientOriginalExtension();
            $request->img->move(public_path('images/'),$imgName);
            $post->img = 'images/' . $imgName;

        }

        $post->save();
        return redirect()->route('posts.index')->with('post','Post updated Successfully');

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
        $post->delete();
        return redirect()->route('posts.index')->with('post','You have successfully deleted  post');
    }
}
