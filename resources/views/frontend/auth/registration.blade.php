@extends("frontend.master")

@section("title","Register")

@section("content")





    <div class="card p-4 mt-5">

        <div class="row">

            <div class="col-sm-6 pt-3">
                <div class="jumbotron">
                    <strong>Hello Viewers,</strong>
                    <p> If you want to post some blog and comment on the post. Please register here for login. After login you can create post and comment. </p>

                </div>

            </div>
            <div class="col-sm-6 pt-3">

                <form action="">
                    <div class="form-group">
                        <label for="email">Name</label>
                        <input type="text" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="email">Password</label>
                        <input type="password" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm btn-block">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>





@endsection