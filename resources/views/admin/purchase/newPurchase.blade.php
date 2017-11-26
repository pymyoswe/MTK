@extends('admin.layouts.dashboard')

@section('page_heading','New Purchase Order')

@section('section')

    <!-- /.row -->
    <div class="col-sm-12">
        <div class="row">
            <div class="col-lg-12">
                @if(Session::has('msg'))
                    <div class="alert alert-success">
                        <strong>{{Session::get('msg')}}</strong>
                    </div>
                @endif
                    <form role="form" action="{{route('add_to_purchaseCart')}}" method="post">
                        {{csrf_field()}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date">Select Date</label>
                                <input type="date" name="date" class="dateTimePicker form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company">Select Company</label>
                                <select name="company" class="form-control">
                                    @foreach($suppliers as $supplier)
                                        <option value="{{$supplier->name}}">{{$supplier->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="category">Select Category</label>
                                <select name="category" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="brand">Select Brand</label>
                                <select name="brand" class="form-control">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->name}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="product">Select Product</label>
                                <select name="product" class="form-control">
                                    <option>Weight Gain</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="unit">Select Unit</label>
                                <select name="unit" class="form-control">
                                    @foreach($units as $unit)
                                        <option value="{{$unit->name}}">{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" name="quantity" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" name="price" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="text" class="form-control" name="amount" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-1">
                            <div class="form-group">
                                <label>Add To Cart</label>
                                <button type="submit" class="btn btn-primary form-control"><span class="fa fa-shopping-cart"></span> Add</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Unit</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!-- /.col-sm-12 -->



@endsection