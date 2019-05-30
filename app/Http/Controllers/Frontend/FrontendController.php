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
        $data['postes'] = Post::orderBy('id','desc')->paginate(10);
        return view('frontend.home.home',$data);

    }

    public function post_details($slug){

        $single_post = Post::where('slug',$slug)->first();
        $single_post->views = $single_post->views + 1;
        $single_post->save();

        return view('frontend.post.post-details',compact('single_post'));

    }


}
