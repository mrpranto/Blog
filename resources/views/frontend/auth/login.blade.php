@extends("frontend.master")

@section("title","Login")

@section("content")




    <div class="card p-4 mt-5">

        <div class="row">

            <div class="col-sm-6 ">
                <div class="jumbotron">
                    <strong>Hello Viewers,</strong>
                    <p> If you are a register visitors, you can login to use your credentials . </p>

                </div>

            </div>
            <div class="col-sm-6 pt-3">

                <form action="">
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