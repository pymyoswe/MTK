@extends ('admin.layouts.app')
@section('title','MTK Medical Store')
@section ('body')
    <div class="register-screen" style="background-image:url('{{ asset('/image/header-bg-image.jpg') }}');"></div>
    <div class="register-center">
        <div class="container min-height" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-6 col-md-offset-4 col-sm-6">
                    <a href="{{route('/')}}">
                        <span class="fa fa-shopping-cart" style="color: #ffff00;font-size: 100px"></span>
                        <strong style="font-size: 30px; color: #FFFFFF;">MTK</strong>
                        <strong style="color: #FFFFFF;">Medical Store</strong>
                    </a>
                </div>
            </div>
            <div class="row" style="margin-top: 100px;">
                <div class="col-md-4 col-md-offset-4">
                    @if(Session::has('msg'))
                        <div class="alert alert-success">
                            <strong>{{Session::get('msg')}}</strong>
                        </div>
                        <div>
                            <a href="{{route('/')}}" class="btn btn-success"> Click me to login</a>
                        </div>
                    @endif
                            <div class="login" id="card">
                                <div class="front signin_form">
                                    <p>Sign Up for Your New Account</p>
                                    @if($errors->has('name'))
                                        <span class="help-block alert alert-danger">
                                                    <strong>{{$errors->first('name')}}</strong>
                                                </span>
                                    @elseif($errors->has('password'))
                                        <span class="help-block alert alert-danger">
                                                    <strong>{{$errors->first('password')}}</strong>
                                                </span>
                                    @elseif($errors->has('password_confirm'))
                                        <span class="help-block alert alert-danger">
                                                    <strong>{{$errors->first('password_confirm')}}</strong>
                                                </span>
                                    @endif
                                    <form class="register-form" role="form" action="{{route('register')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Username" required>
                                                <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="Password" required>
                                                <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-lock"></i>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password_confirm" value="{{old('password_confrim')}}" placeholder="Confirm Password" required>
                                                <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-lock"></i>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="form-group sign-btn">
                                            <button type="submit" class="btn btn-primary"> Sign Up </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection


