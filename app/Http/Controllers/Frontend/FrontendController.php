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
        $data['postes'] = Post::with('category','user')->orderBy('id','desc')->paginate(10);
        return view('frontend.home.home',$data);

    }

    public function post_details($slug){

        $data = [];
        $data['single_post'] = Post::with('category','user')->where('slug',$slug)->first();
        $data['single_post']->views = $data['single_post']->views + 1;
        $data['single_post']->save();

        return view('frontend.post.post-details',$data);

    }


}
