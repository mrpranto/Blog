@extends("frontend.master")

@section("title","Home")

@section("content")



    @foreach($postes as $post)

        <div class="card mb-4">

        <div class="hover01 column">
            <div>
                <figure>
                    <a href="{{ route('post',$post->slug) }}"><img class="img-fluid rounded" src="{{ $post->image }}" alt=""></a>
                </figure>
            </div>
        </div>


        <div class="card-body">

            <a href="{{ route('post',$post->slug) }}" class="text-decoration-none text-dark"> <h2 class="card-title">{{ $post->title }}</h2> </a>
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
            <a href="{{ route('post',$post->slug) }}" class="btn btn-primary btn-sm">Read More →</a>
        </div>

    </div>

    @endforeach




    @include('frontend.inc.pagination')



@endsection