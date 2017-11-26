@extends ('admin.layouts.app')
@section('title')
    MTK Medical Store
    @endsection
@section ('body')
    <div class="login-screen" style="background-image:url('{{ asset('/image/meds-main.jpg') }}');"></div>
    <div class="login-center">
        <div class="container min-height" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <a href="{{route('/')}}">
                        <span class="fa fa-shopping-cart" style="color: #ffff00;font-size: 100px"></span>
                        <strong style="font-size: 30px; color: #FFFFFF;">MTK</strong>
                        <strong style="color: #FFFFFF;">Medical Store</strong>
                    </a>
                </div>
                @if(Session::has('msg'))
                    <div class="alert alert-danger">
                        <strong>{{Session::get('msg')}}</strong>
                    </div>
                @endif
                <div class="col-md-6 col-md-offset-8 col-md-6 col-md-offset-8">
                    <div class="login" id="card">
                        <div class="front signin_form">
                            <p>Login Your Account</p>
                            <form class="login-form" role="form" method="post" action="{{route('login')}}">
                                {{csrf_field()}}
                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name"
                                               value="{{ old('name') }}" required autofocus placeholder="User Name">
                                        <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" required placeholder="Password">
                                        <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-lock"></i>
                                      </span>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group sign-btn">
                                    <input type="submit" class="btn" value="Log in">
                                </div>
                                <div class="form-group reg-link">
                                    <p>
                                        <a href="{{route('register')}}" id="flip-btn" class="signup signup_link"><strong>Sign up for a new account</strong></a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
