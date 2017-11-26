@extends('admin.layouts.dashboard')

@section('page_heading','New Brand')

@section('section')

    <!-- /.row -->
    <div class="col-sm-12">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                @if(Session::has('msg'))
                    <div class="alert alert-success">
                        <strong>{{Session::get('msg')}}</strong>
                    </div>
                @endif
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-plus-circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('new_brand')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Brand Name">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="from-group">
                                <button class="btn btn-primary" type="submit">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->



@endsection