@extends("frontend.master")

@section("title","Dashboard")

@section("content")





    <div class="row p-4">


        <div class="col-md-3">

            <div class="list-group">

                    <a href="" class="list-group-item list-group-item-action">
                        <i class="fa fa-tachometer-alt color"></i>&nbsp;&nbsp; Dashboard
                    </a>

                    <a href="" class="list-group-item list-group-item-action">
                       <i class="fa fa-certificate color"></i>&nbsp;&nbsp; Category
                    </a>



                    <a href="" class="list-group-item list-group-item-action">
                        <i class="fa fa-newspaper color"></i>&nbsp;&nbsp; Post
                    </a>

            </div>



        </div>


        <div class="col-md-9">

            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1>4</h1>
                            <h6><i class="fa fa-certificate color"></i>  Categories </h6>
                        </div>
                    </div>
                </div>



                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1>4</h1>
                            <h6> <i class="fa fa-newspaper color"></i>  Posts </h6>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>





@endsection