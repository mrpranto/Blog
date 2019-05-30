@extends("frontend.master")

@section("title","Post Title")

@section("content")



        <div class="card mb-4">

        <div class="hover01 column">
            <div>
                <figure>
                    <a href=""><img class="img-fluid rounded" src="{{ $single_post->image }}" alt=""></a>
                </figure>
            </div>
        </div>


        <div class="card-body">

            <h2 class="card-title">{{ $single_post->title }}</h2>
            <p>
                <i class="fa fa-user color" style="color: #aa0000;"></i>&nbsp; {{ $single_post->user->name }} &nbsp;&nbsp;&nbsp;
                <i class="fa fa-calendar color"></i>&nbsp; {{ \Carbon\Carbon::parse($single_post->created_at)->format('M j, Y, g:i A')  }}&nbsp;&nbsp;
                <i class="fa fa-globe color"></i>&nbsp; {{ $single_post->category->name }} &nbsp;&nbsp;&nbsp;
                <i class="fa fa-eye color"></i>&nbsp; {{ $single_post->views }}&nbsp;&nbsp;&nbsp;
                <i class="fa fa-comment"></i>&nbsp; {{ $single_post->comments }}

            </p>
            <hr>
            <p class="card-text">{{ $single_post->description }}</p>

        </div>

    </div>



        <!--Facebook-->
        <a href="" class="btn btn-fb btn-sm btn-primary"><i class="fab fa-facebook-f pr-1"></i> Facebook</a>
        <!--Twitter-->
        <a href="" class="btn btn-tw btn-sm btn-info"><i class="fab fa-twitter pr-1"></i> Twitter</a>
        <!--Google +-->
        <a href="" class="btn btn-gplus btn-sm btn-danger"><i class="fab fa-google-plus-g pr-1"></i> Google +</a>


        <div class="row mt-4">
            <div class="col-sm-10">

                <div class="list-group mb-4 mt-4">
                    <h6 class="list-group-item list-group-item-action bg">
                        <i class="fa fa-user"></i> &nbsp; Pranto &nbsp;&nbsp;&nbsp; <i class="fas fa-calendar-alt"></i> &nbsp; January 1, 2018
                    </h6>

                    <p class="list-group-item list-group-item-action small">
                         This is a popular post titleThis is a popular post titleThis is a popular post title
                    </p>

                </div>


                <div class="list-group mb-4 mt-4">
                    <h6 class="list-group-item list-group-item-action bg">
                        <i class="fa fa-user"></i> &nbsp; Pranto &nbsp;&nbsp;&nbsp; <i class="fas fa-calendar-alt"></i> &nbsp; January 1, 2018
                    </h6>

                    <p class="list-group-item list-group-item-action small">
                         This is a popular post titleThis is a popular post titleThis is a popular post title
                    </p>

                </div>


                <div class="list-group mb-4 mt-4">
                    <h6 class="list-group-item list-group-item-action bg">
                        <i class="fa fa-user"></i> &nbsp; Pranto &nbsp;&nbsp;&nbsp; <i class="fas fa-calendar-alt"></i> &nbsp; January 1, 2018
                    </h6>

                    <p class="list-group-item list-group-item-action small">
                         This is a popular post titleThis is a popular post titleThis is a popular post title
                    </p>

                </div>





                <div class="card mb-4 mt-4">
                    <div class="card-body">

                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="email">Name</label>
                                <input type="text" class="form-control" id="name">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>

                            <div class="form-group">
                                <label for="pwd">Comment</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Post
                            </button>
                        </form>

                    </div>
                </div>



            </div>
        </div>





@endsection