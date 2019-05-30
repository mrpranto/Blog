@extends("frontend.master")

@section("title",$category->name)

@section("content")


<h4 class="text-center mb-4">{{ $category->name }}</h4>


@foreach($postes as $post)

    <div class="card mb-4">

        <div class="hover01 column">
            <div>
                <figure>
                    <a href="{{ url('/'.$post->slug) }}"><img class="img-fluid rounded" src="{{ $post->image }}" alt=""></a>
                </figure>
            </div>
        </div>


        <div class="card-body">

            <a href="{{ url('/'.$post->slug) }}" class="text-decoration-none text-dark"> <h2 class="card-title">{{ $post->title }}</h2> </a>
            <p>
                <i class="fa fa-user" style="color: #aa0000;"></i>&nbsp; {{ $post->user->name }} &nbsp;&nbsp;&nbsp;
                <i class="fa fa-calendar"></i>&nbsp; {{ \Carbon\Carbon::parse($post->created_at)->format('M j, Y, g:i A')  }} &nbsp;&nbsp;&nbsp;
                <i class="fa fa-globe"></i>&nbsp; {{ $post->category->name }} &nbsp;&nbsp;&nbsp;
                <i class="fa fa-eye"></i>&nbsp; {{ $post->views }}&nbsp;&nbsp;&nbsp;
                <i class="fa fa-comment"></i>&nbsp; {{ $post->comments }}

            </p>
            <hr>
            <p class="card-text">
                {!! str_limit($post->description, $limit = 250, $end = '...') !!}
            </p>
            <a href="{{ url('/'.$post->slug) }}" class="btn btn-primary btn-sm">Read More →</a>
        </div>

    </div>

@endforeach


@if($postes->count() == 0)

    <div class="card p-5 text-center">
        <h5 class="text-danger">No Post found in this Category !</h5>
    </div>

@endif


@if($postes->count() > 5)

    @include('frontend.inc.pagination')

@endif



@endsection