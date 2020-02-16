<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','DESC')->take(4)->get();
        $slides = Post::where('slide',1)->get();
        $food = Post::where('category_id',5)->orderBy('id','DESC')->first();
        return view('front.index',compact('posts','slides','food'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function single($category,$slug) {
        $allcategories = Category::get();
        $category = Category::where('slug',$category)->first() ?? abort(404,'Not Found');
        $single = Post::where('category_id',$category->id)->where('slug',$slug)->first() ?? abort(404,'Not Found');

        return view('front.single',compact('single','allcategories'));
    }

    public function category($category) {
        $category = Category::where('slug',$category)->first() ?? abort(404,'Not Found');
        $posts = Post::where('category_id',$category->id)->paginate(5) ?? abort(404,'Not Found');
        return view('front.category',compact('category','posts'));
    }
}
