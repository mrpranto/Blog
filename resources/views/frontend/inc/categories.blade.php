
<div class="list-group">
    <h5 class="list-group-item list-group-item-action bg">
        Catagory
    </h5>

    @foreach(\App\Models\Category::orderBy('id','desc')->get() as $category)

    <a href="#" class="list-group-item list-group-item-action">
        <i class="fa fa-angle-double-right color"></i>&nbsp;&nbsp; {{ $category->name }}
    </a>

        @endforeach

</div>

<br>

<div class="list-group">
    <h5 class="list-group-item list-group-item-action bg">
        Recent Diary
    </h5>

    @foreach(\App\Models\Post::orderBy('id','desc')->limit(5)->get() as $post)

    <a href="{{ url('/'.$post->slug) }}" class="list-group-item list-group-item-action">
        <i class="fa fa-chevron-circle-right color"></i>&nbsp;&nbsp; {{ $post->title }}
        {{--<hr>--}}
        {{--<p class="card-text small">{!! str_limit($post->description, $limit = 100, $end = '...') !!}</p>--}}
    </a>

    @endforeach

</div>

<br>

<div class="list-group">
    <h5 class="list-group-item list-group-item-action bg">
        Popular Diary
    </h5>

    @foreach(\App\Models\Post::orderBy('views','desc')->limit(5)->get() as $post)

        <a href="{{ url('/'.$post->slug) }}" class="list-group-item list-group-item-action">
            <i class="fa fa-chevron-circle-right color"></i>&nbsp;&nbsp; {{ $post->title }}
            {{--<hr>--}}
            {{--<p class="card-text small">{!! str_limit($post->description, $limit = 100, $end = '...') !!}</p>--}}
        </a>

    @endforeach

</div>

