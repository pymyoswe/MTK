@extends('admin.layouts.dashboard')

@section('page_heading','New Supplier')

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
                        <form role="form" action="{{route('new_supplier')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Company Name">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus placeholder="Phone Number">
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                                <textarea class="form-control" name="address" required autofocus placeholder="Address">{{ old('address') }}</textarea>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
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