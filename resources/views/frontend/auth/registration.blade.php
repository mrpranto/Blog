@extends("frontend.master")

@section("title","Register")

@section("content")




    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">

            <div class="card p-4">

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
                        <label for="email">Password</label>
                        <input type="password" class="form-control" id="email">
                    </div>


                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-registered"></i> Register
                    </button>
                </form>

            </div>

        </div>
        <div class="col-sm-2"></div>
    </div>










@endsection