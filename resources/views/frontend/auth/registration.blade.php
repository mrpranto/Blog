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

                <form action="{{ route('storeUserInfo') }}" method="post">

                    @if(Session::get('msg'))

                        <div class="alert alert-success">{{ Session::get('msg') }}</div>

                    @endif

                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name">

                        @if($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif

                    </div>

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