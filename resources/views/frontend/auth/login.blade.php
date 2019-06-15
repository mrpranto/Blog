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

                <form action="{{ route('processLogin') }}" method="post">

                    @if(Session::get('msg'))

                        <div class="alert alert-success">{{ Session::get('msg') }}</div>

                    @endif

                    @if(Session::get('error'))

                        <div class="alert alert-danger">{{ Session::get('error') }}</div>

                    @endif

                    @csrf


                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email">

                        @if($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password">

                        @if($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
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