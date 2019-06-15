<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class FrontendController extends Controller
{

    public function index(){

        $data = [];
        $data['postes'] = Post::with('category','user')->orderBy('id','desc')->paginate(7);
        return view('frontend.home.home',$data);

    }

    public function post_details($slug){

        $data = [];
        $data['single_post'] = Post::with('category','user')->where('slug',$slug)->first();
        $data['single_post']->views = $data['single_post']->views + 1;
        $data['single_post']->save();

        return view('frontend.post.post-details',$data);

    }

    public function category_product($slug){

        $data = [];
        $data['category'] = Category::where('slug',$slug)->first();
        $data['postes'] = Post::with('category','user')->where('category_id',$data['category']['id'])->paginate(5);

        return view('frontend.category.category_post',$data);

    }




}
