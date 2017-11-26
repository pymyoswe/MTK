@extends('admin.layouts.dashboard')

@section('page_heading','Update Supplier')

@section('section')

    <!-- /.row -->
    <div class="col-sm-12">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                @if(Session::has('updateInfo'))
                        <div class="alert alert-success">
                            <strong>{{Session::get('updateInfo')}}</strong>
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
                        <form role="form" action="{{route('update_supplier')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="name" value="{{$supplier->name}}" required autofocus placeholder="Company Name">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="phone" value="{{ $supplier->phone }}" required autofocus placeholder="Phone Number">
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                                <textarea class="form-control" name="address"  required autofocus placeholder="Address">{{ $supplier->address }}</textarea>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{$supplier->id}}">
                            </div>
                            <div class="from-group">
                                <button class="btn btn-primary" type="submit">Update</button>
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