@extends("frontend.master")

@section("title","Login")

@section("content")




    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">

            <div class="card p-4">

                <form action="/action_page.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Password">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm btn-block">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </div>

                </form>

            </div>

        </div>
        <div class="col-sm-2"></div>
    </div>









@endsection